<?php
include('includes/header.php');
include('includes/db_connection.php');

// Get booking ID from URL parameter
$booking_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Get booking details from database
$sql = "SELECT a.*, CONCAT(c.first_name, ' ', c.last_name) as customer_name, c.email as customer_email, c.phone as customer_phone
        FROM appointments a 
        LEFT JOIN customers c ON a.email = c.email
        WHERE a.id = $booking_id";
$result = executeQuery($sql);

// Check if booking exists
if ($result && $result->num_rows > 0) {
    $booking = $result->fetch_assoc();
} else {
    // Redirect to bookings page if booking not found
    header('Location: bookings.php');
    exit;
}

// Get consultation notes
$sql_notes = "SELECT n.*, CONCAT(u.first_name, ' ', u.last_name) as admin_name 
             FROM consultation_notes n
             JOIN admin_users u ON n.admin_user_id = u.id
             WHERE n.appointment_id = $booking_id
             ORDER BY n.created_at DESC";
$notes_result = executeQuery($sql_notes);
?>

<div class="admin-content-header">
    <h1>Booking Details</h1>
    <div class="header-actions">
        <a href="bookings.php" class="btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Bookings
        </a>
        <button class="btn-primary" id="edit-booking">
            <i class="fas fa-edit"></i> Edit Booking
        </button>
    </div>
</div>

<div class="booking-detail-container">
    <div class="booking-detail-card">
        <div class="booking-detail-header">
            <div class="booking-id">
                <h3>Booking #<?php echo str_pad($booking['id'], 6, '0', STR_PAD_LEFT); ?></h3>
                <span class="status-badge status-<?php echo strtolower($booking['status']); ?>">
                    <?php echo ucfirst($booking['status']); ?>
                </span>
            </div>
            <div class="booking-actions">
                <div class="dropdown">
                    <button class="dropdown-toggle">
                        Actions <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#" id="change-status">Change Status</a>
                        <a href="#" id="reschedule">Reschedule</a>
                        <a href="#" id="send-reminder">Send Reminder</a>
                        <a href="#" id="add-note">Add Note</a>
                        <a href="print_booking.php?id=<?php echo $booking_id; ?>" target="_blank">Print</a>
                        <a href="#" id="delete-booking" class="text-danger">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="booking-detail-body">
            <div class="booking-detail-section">
                <h4><i class="fas fa-info-circle"></i> Booking Information</h4>
                <div class="detail-row">
                    <div class="detail-group">
                        <span class="detail-label">Consultation Type</span>
                        <span class="detail-value"><?php echo $booking['consultation_type']; ?></span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Date & Time</span>
                        <span class="detail-value"><?php echo date('F j, Y - g:i A', strtotime($booking['appointment_datetime'])); ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group">
                        <span class="detail-label">Created</span>
                        <span class="detail-value"><?php echo date('F j, Y - g:i A', strtotime($booking['created_at'])); ?></span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Last Updated</span>
                        <span class="detail-value"><?php echo date('F j, Y - g:i A', strtotime($booking['updated_at'])); ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group">
                        <span class="detail-label">Status</span>
                        <span class="detail-value">
                            <span class="status-badge status-<?php echo strtolower($booking['status']); ?>">
                                <?php echo ucfirst($booking['status']); ?>
                            </span>
                        </span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Payment Status</span>
                        <span class="detail-value">
                            <span class="status-badge status-<?php echo strtolower($booking['payment_status']); ?>">
                                <?php echo ucfirst($booking['payment_status']); ?>
                            </span>
                        </span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Payment Amount</span>
                        <span class="detail-value">
                            C$<?php echo number_format($booking['payment_amount'], 2); ?>
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="booking-detail-section">
                <h4><i class="fas fa-user"></i> Customer Information</h4>
                <div class="detail-row">
                    <div class="detail-group">
                        <span class="detail-label">Name</span>
                        <span class="detail-value"><?php echo $booking['first_name'] . ' ' . $booking['last_name']; ?></span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Email</span>
                        <span class="detail-value"><?php echo $booking['email']; ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group">
                        <span class="detail-label">Phone</span>
                        <span class="detail-value"><?php echo $booking['phone']; ?></span>
                    </div>
                    <div class="detail-group">
                        <span class="detail-label">Country</span>
                        <span class="detail-value"><?php echo $booking['country']; ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group full-width">
                        <span class="detail-label">Address</span>
                        <span class="detail-value">
                            <?php 
                            $address = [];
                            if (!empty($booking['address'])) $address[] = $booking['address'];
                            if (!empty($booking['city'])) $address[] = $booking['city'];
                            if (!empty($booking['postal_code'])) $address[] = $booking['postal_code'];
                            echo !empty($address) ? implode(', ', $address) : 'N/A';
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="booking-detail-section">
                <h4><i class="fas fa-align-left"></i> Additional Information</h4>
                <div class="detail-row">
                    <div class="detail-group full-width">
                        <span class="detail-label">Immigration Purpose</span>
                        <span class="detail-value"><?php echo !empty($booking['immigration_purpose']) ? $booking['immigration_purpose'] : 'N/A'; ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group full-width">
                        <span class="detail-label">Special Requests</span>
                        <span class="detail-value"><?php echo !empty($booking['special_requests']) ? $booking['special_requests'] : 'N/A'; ?></span>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-group full-width">
                        <span class="detail-label">Notes</span>
                        <span class="detail-value"><?php echo !empty($booking['additional_notes']) ? $booking['additional_notes'] : 'N/A'; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="consultation-notes-card">
        <div class="card-header">
            <h3>Consultation Notes</h3>
            <button class="btn-primary" id="add-consultation-note">
                <i class="fas fa-plus"></i> Add Note
            </button>
        </div>
        
        <div class="consultation-notes-list">
            <?php if ($notes_result && $notes_result->num_rows > 0): ?>
                <?php while ($note = $notes_result->fetch_assoc()): ?>
                    <div class="note-item">
                        <div class="note-header">
                            <div class="note-meta">
                                <span class="note-author"><?php echo $note['admin_name']; ?></span>
                                <span class="note-date"><?php echo date('M j, Y - g:i A', strtotime($note['created_at'])); ?></span>
                            </div>
                            <div class="note-actions">
                                <button class="note-action edit-note" data-id="<?php echo $note['id']; ?>"><i class="fas fa-edit"></i></button>
                                <button class="note-action delete-note" data-id="<?php echo $note['id']; ?>"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="note-content"><?php echo nl2br($note['notes']); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-notes">
                    <p>No consultation notes have been added yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Add/Edit Note Modal -->
<div class="modal" id="note-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add Consultation Note</h3>
            <button class="modal-close">&times;</button>
        </div>
        <div class="modal-body">
            <form id="note-form">
                <input type="hidden" id="note-id" name="note_id" value="">
                <input type="hidden" id="appointment-id" name="appointment_id" value="<?php echo $booking_id; ?>">
                
                <div class="form-group">
                    <label for="note-content">Note Content</label>
                    <textarea id="note-content" name="note_content" rows="6" required></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn-secondary modal-close">Cancel</button>
            <button class="btn-primary" id="save-note">Save Note</button>
        </div>
    </div>
</div>

<!-- Change Status Modal -->
<div class="modal" id="status-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Change Booking Status</h3>
            <button class="modal-close">&times;</button>
        </div>
        <div class="modal-body">
            <form id="status-form">
                <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
                
                <div class="form-group">
                    <label for="booking-status">Status</label>
                    <select id="booking-status" name="status" required>
                        <option value="pending" <?php echo $booking['status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                        <option value="confirmed" <?php echo $booking['status'] == 'confirmed' ? 'selected' : ''; ?>>Confirmed</option>
                        <option value="completed" <?php echo $booking['status'] == 'completed' ? 'selected' : ''; ?>>Completed</option>
                        <option value="cancelled" <?php echo $booking['status'] == 'cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                        <option value="no-show" <?php echo $booking['status'] == 'no-show' ? 'selected' : ''; ?>>No Show</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="payment-status">Payment Status</label>
                    <select id="payment-status" name="payment_status" required>
                        <option value="unpaid" <?php echo $booking['payment_status'] == 'unpaid' ? 'selected' : ''; ?>>Unpaid</option>
                        <option value="paid" <?php echo $booking['payment_status'] == 'paid' ? 'selected' : ''; ?>>Paid</option>
                        <option value="refunded" <?php echo $booking['payment_status'] == 'refunded' ? 'selected' : ''; ?>>Refunded</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="status-note">Note (Optional)</label>
                    <textarea id="status-note" name="note" rows="3"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn-secondary modal-close">Cancel</button>
            <button class="btn-primary" id="save-status">Save Changes</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add note button
    const addNoteBtn = document.getElementById('add-consultation-note');
    const addNoteModal = document.getElementById('note-modal');
    const noteForm = document.getElementById('note-form');
    
    addNoteBtn.addEventListener('click', function() {
        document.querySelector('#note-modal .modal-header h3').textContent = 'Add Consultation Note';
        document.getElementById('note-id').value = '';
        document.getElementById('note-content').value = '';
        addNoteModal.style.display = 'flex';
    });
    
    // Add note from dropdown
    const addNoteLink = document.getElementById('add-note');
    addNoteLink.addEventListener('click', function(e) {
        e.preventDefault();
        addNoteBtn.click();
    });
    
    // Edit note buttons
    const editNoteButtons = document.querySelectorAll('.edit-note');
    editNoteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const noteId = this.getAttribute('data-id');
            document.querySelector('#note-modal .modal-header h3').textContent = 'Edit Consultation Note';
            document.getElementById('note-id').value = noteId;
            
            // In a real app, you would fetch the note content from the server
            const noteContent = this.closest('.note-item').querySelector('.note-content').textContent;
            document.getElementById('note-content').value = noteContent;
            
            addNoteModal.style.display = 'flex';
        });
    });
    
    // Change status button
    const changeStatusBtn = document.getElementById('change-status');
    const statusModal = document.getElementById('status-modal');
    
    changeStatusBtn.addEventListener('click', function(e) {
        e.preventDefault();
        statusModal.style.display = 'flex';
    });
    
    // Close modals
    const modalCloseButtons = document.querySelectorAll('.modal-close');
    modalCloseButtons.forEach(button => {
        button.addEventListener('click', function() {
            addNoteModal.style.display = 'none';
            statusModal.style.display = 'none';
        });
    });
    
    // Close modal if clicked outside
    window.addEventListener('click', function(event) {
        if (event.target === addNoteModal) {
            addNoteModal.style.display = 'none';
        }
        if (event.target === statusModal) {
            statusModal.style.display = 'none';
        }
    });
    
    // Save note
    const saveNoteBtn = document.getElementById('save-note');
    saveNoteBtn.addEventListener('click', function() {
        if (document.getElementById('note-content').value.trim() === '') {
            alert('Please enter a note.');
            return;
        }
        
        // In a real app, you would send this to the server via AJAX
        alert('Note saved successfully!');
        
        // In a demo, we'll just add a new note to the list
        const noteId = document.getElementById('note-id').value;
        if (!noteId) {
            // This is a new note
            const notesList = document.querySelector('.consultation-notes-list');
            const emptyNotes = notesList.querySelector('.empty-notes');
            if (emptyNotes) {
                emptyNotes.remove();
            }
            
            const newNote = document.createElement('div');
            newNote.className = 'note-item';
            newNote.innerHTML = `
                <div class="note-header">
                    <div class="note-meta">
                        <span class="note-author">${document.querySelector('.admin-user-details h4').textContent}</span>
                        <span class="note-date">Just now</span>
                    </div>
                    <div class="note-actions">
                        <button class="note-action edit-note"><i class="fas fa-edit"></i></button>
                        <button class="note-action delete-note"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <div class="note-content">${document.getElementById('note-content').value.replace(/\n/g, '<br>')}</div>
            `;
            
            notesList.insertBefore(newNote, notesList.firstChild);
        } else {
            // This is an edit to an existing note
            const editButtons = document.querySelectorAll('.edit-note');
            let noteElement;
            
            editButtons.forEach(button => {
                if (button.getAttribute('data-id') === noteId) {
                    noteElement = button.closest('.note-item');
                }
            });
            
            if (noteElement) {
                noteElement.querySelector('.note-content').innerHTML = document.getElementById('note-content').value.replace(/\n/g, '<br>');
            }
        }
        
        // Close modal
        addNoteModal.style.display = 'none';
    });
    
    // Save status change
    const saveStatusBtn = document.getElementById('save-status');
    saveStatusBtn.addEventListener('click', function() {
        // In a real app, you would send this to the server via AJAX
        alert('Status updated successfully!');
        
        // Update status badges in the UI
        const newStatus = document.getElementById('booking-status').value;
        const newPaymentStatus = document.getElementById('payment-status').value;
        
        document.querySelectorAll('.status-badge.status-' + '<?php echo strtolower($booking['status']); ?>').forEach(badge => {
            badge.className = 'status-badge status-' + newStatus;
            badge.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
        });
        
        document.querySelector('.status-badge.status-' + '<?php echo strtolower($booking['payment_status']); ?>').className = 'status-badge status-' + newPaymentStatus;
        document.querySelector('.status-badge.status-' + newPaymentStatus).textContent = newPaymentStatus.charAt(0).toUpperCase() + newPaymentStatus.slice(1);
        
        // Close modal
        statusModal.style.display = 'none';
    });
});
</script>

<?php include('includes/footer.php'); ?> 