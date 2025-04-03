<?php
include('includes/header.php');
include('includes/db_connection.php');

// Initialize variables
$post = [
    'id' => 0,
    'category_id' => 0,
    'title' => '',
    'slug' => '',
    'excerpt' => '',
    'content' => '',
    'featured_image' => '',
    'author' => 'CANEXT Team',
    'status' => 'draft',
    'publish_date' => date('Y-m-d H:i:s')
];

// Check if editing existing post
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $post_id = intval($_GET['id']);
    $sql = "SELECT * FROM blog_posts WHERE id = $post_id";
    $result = executeQuery($sql);
    
    if ($result && $result->num_rows > 0) {
        $post = $result->fetch_assoc();
    } else {
        header('Location: blog.php?error=post_not_found');
        exit;
    }
}

// Get all categories for dropdown
$sql = "SELECT * FROM blog_categories ORDER BY display_order, name";
$categories = executeQuery($sql);

if (!$categories || $categories->num_rows === 0) {
    // No categories, redirect to add category page
    header('Location: blog_category_edit.php?error=no_categories');
    exit;
}
?>

<div class="admin-content-header">
    <h1><?php echo $post['id'] ? 'Edit' : 'Add'; ?> Blog Post</h1>
    <p><a href="blog.php">← Back to Blog Management</a></p>
</div>

<?php if (isset($_GET['error'])): ?>
<div class="alert alert-danger">
    <?php 
    switch ($_GET['error']) {
        case 'slug_exists':
            echo "A post with this slug already exists. Please choose a different slug.";
            break;
        default:
            echo "An error occurred. Please try again.";
    }
    ?>
</div>
<?php endif; ?>

<div class="admin-form-container">
    <form method="post" action="blog_post_save.php" class="admin-form" enctype="multipart/form-data">
        <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
        
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required onkeyup="generateSlug(this.value)">
            </div>
            
            <div class="form-group col-md-4">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" required>
                    <option value="">Select a category</option>
                    <?php while ($category = $categories->fetch_assoc()): ?>
                        <option value="<?php echo $category['id']; ?>" <?php if ($category['id'] == $post['category_id']) echo 'selected'; ?>>
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" value="<?php echo htmlspecialchars($post['slug']); ?>" required>
            <small>URL-friendly version of the title. Used in post links.</small>
        </div>
        
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3"><?php echo htmlspecialchars($post['excerpt']); ?></textarea>
            <small>A short summary of the post. If left empty, an excerpt will be generated from the content.</small>
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="15" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="featured_image">Featured Image</label>
                <input type="file" id="featured_image" name="featured_image" accept="image/*">
                
                <?php if (!empty($post['featured_image'])): ?>
                <div class="current-image">
                    <p>Current image:</p>
                    <img src="../<?php echo $post['featured_image']; ?>" alt="Current featured image" style="max-width: 200px; max-height: 150px; margin-top: 10px;">
                    <div>
                        <label>
                            <input type="checkbox" name="remove_image" value="1"> Remove image
                        </label>
                    </div>
                </div>
                <?php endif; ?>
                
                <small>Recommended size: 1200x800 pixels or similar ratio</small>
            </div>
            
            <div class="form-group col-md-6">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($post['author']); ?>">
                
                <div class="form-row" style="margin-top: 15px;">
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="draft" <?php if ($post['status'] === 'draft') echo 'selected'; ?>>Draft</option>
                            <option value="published" <?php if ($post['status'] === 'published') echo 'selected'; ?>>Published</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="publish_date">Publish Date</label>
                        <input type="datetime-local" id="publish_date" name="publish_date" value="<?php echo date('Y-m-d\TH:i', strtotime($post['publish_date'])); ?>">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary"><?php echo $post['id'] ? 'Update' : 'Add'; ?> Post</button>
            <a href="blog.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<script>
    // Initialize TinyMCE for the content textarea
    tinymce.init({
        selector: '#content',
        height: 400,
        plugins: 'link image code table lists',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true
    });
    
    function generateSlug(text) {
        // If it's a new post or the slug field hasn't been manually edited
        if (document.getElementById('post_id').value == "0" || document.getElementById('slug').dataset.edited !== 'true') {
            const slug = text.toLowerCase()
                .replace(/[^\w\s-]/g, '') // Remove special characters
                .replace(/\s+/g, '-')     // Replace spaces with hyphens
                .replace(/-+/g, '-');     // Remove consecutive hyphens
            
            document.getElementById('slug').value = slug;
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        // Mark slug as edited if user changes it manually
        document.getElementById('slug').addEventListener('input', function() {
            this.dataset.edited = 'true';
        });
    });
</script>

<?php include('includes/footer.php'); ?> 