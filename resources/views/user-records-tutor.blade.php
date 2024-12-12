<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RendeLearn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,530;1,530&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-dashboard-index.css">
    <link rel="stylesheet" href="assets/css/style-user-records.css">
    <link rel="stylesheet" href="assets/css/style-modal.css">
    <link rel="stylesheet" href="assets/css/style-table.css">
</head>
<body>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <header>

        <!-- Header -->
        <div class="header">
            <div class="logo">
                <a href="/">
                <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn">
                </a>
            </div>

        <!-- Header Buttons -->
        <div class="header-buttons">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

        <!-- Offcanvas content -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RendeLearn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign in</a>
                        </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Additional Header Links (not inside offcanvas) -->
        <div class="header-item home">
            <p><a href="/">Home</a></p>
        </div>
        <div class="header-item tutors">
            <p><a href="#">Tutors</a></p>
        </div>
        <div class="header-item blog">
            <p><a href="#">Blog</a></p>
        </div>
        <div class="header-item support">
            <p><a href="#">Support</a></p>
        </div>
        <div class="header-item credentials">
            <a href="login.html" class="sign-in-btn">Sign in</a>
        </div>

        <!-- Account Info (for logged-in users, comment or uncomment as needed) -->
        <!-- <div class="credentials-logged-in">
            <p>Logged in as <span class="username">[username]</span></p>
        </div> -->
    </div>
</div>

</header>

<main>

    <div class="dashboard-wrapper">

        <div class="dashboard-menu">

            <div class="home">
                <a href="{{route('dashboard')}}">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span class="home-btn">Home</span>
                </a>
            </div>

            <div class="user-records">
                <a href="{{route('user-records')}}">
                    <i class="fa-solid fa-table"></i>
                    <span class="user-records-btn">User Records</span>
                </a>
            </div>

            <div class="sessions">
                <a href="sessions.php">
                    <i class="fa-solid fa-database"></i>
                    <span class="sessions-btn">Sessions</span>
                </a>
            </div>

            <div class="admin-settings">
                <a href="admin-settings.html">
                    <i class="fa-solid fa-user-tie"></i>
                    <span class="admin-settings-btn">Admin Settings</span>
                </a>
            </div>
            
            <div class="debug">
                <a href="debug.html">
                    <i class="fa-solid fa-bug"></i>
                    <span class="debug-btn">Debug</span>
                </a>
            </div>

            <div class="logout">
                <a href="logout.html">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="logout-btn">Logout</span>
                </a>
            </div>

        </div>
        
        <div class="user-records-wrapper">
            
            <h1 class="user-records-title">User Records</h1>
            
            <div class="user-records-tab-wrapper">

                <div class="user-records-tab">
                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user-records')}}">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user-records-admin')}}">Admins</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user-records-student')}}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('user-records-tutor')}}">Tutors</a>
                        </li>
                    </ul>
                </div>

                <div class="user-records-crud-btn">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#new-records">New</button>
                    <button type="button" class="btn btn-primary btn-sm" id="edit-button">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" id="delete-button">Delete</button>
                    <button type="button" class="btn btn-primary btn-sm" id="cancel-button" style="display: none;">Cancel</button>
                </div>
            
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <div class="user-records-container1">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="select-column" style="display: none;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="select-all">
                                </div>
                            </th>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Role</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Extension</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Nationality</th>
                        </tr>
                    <thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="select-column" style="display: none;">
                                <div class="form-check">
                                    <input class="form-check-input records" type="checkbox" value="{{ $user->id }}">
                                </div>
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->middlename }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->extension }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->religion }}</td>
                            <td>{{ $user->nationality }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="13" style="text-align: center;">No records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            
            </form>

        </div>

    </div>

</main>

    <!-- Modal -->

    <div class="modal-new">

    <div class="modal fade" id="new-records" tabindex="-1">
    
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">New record</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="{{route('user-records.store')}}" method="POST">
                @csrf
            <div class="modal-body">

                <div class="form-wrapper1">
                    
                    <div class="id">

                        <div class="form-floating" style="width: 200px;">
                            <input type="number" class="form-control" id="id-input" placeholder="" name="id" required>
                            <label for="id">ID</label>
                        </div>

                    </div>

                    <div class="user-id">

                        <div class="form-floating" style="width: 200px;">
                            <input type="number" class="form-control" id="user-id-input" placeholder="" name="user_id" required>
                            <label for="user-id">User ID</label>
                        </div>

                    </div>

                    <div class="role">

                        <div class="form-floating" style="width: 200px;">
                            <select class="form-select" id="role-input" name="role" required>
                                <option selected>Select..</option>
                                <option value="1">Admin</option>
                                <option value="2">Student</option>
                                <option value="3">Tutor</option>
                            </select>
                            <label for="role">Role</label>
                        </div>

                    </div>
                    
                </div>

                <div class="form-wrapper2">
                    
                    <div class="firstname">

                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="firstname-input" placeholder="" name="firstname" required>
                            <label for="firstname">First name</label>
                        </div>

                    </div>

                    <div class="middlename">

                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="middlename-input" placeholder="" name="middlename">
                            <label for="middlename">Middle name</label>
                        </div>

                    </div>

                    <div class="lastname">

                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="lastname-input" placeholder="" name="lastname" required>
                            <label for="lastname">Last name</label>
                        </div>

                    </div>

                </div>

                <div class="form-wrapper3">

                    <div class="extension">

                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="extension-input" placeholder="" name="extension">
                            <label for="extension">Extension</label>
                        </div>

                    </div>

                    <div class="birthdate">

                        <div class="form-floating" style="width: 200px;">
                            <input type="date" class="form-control" id="birthdate-input" placeholder="" name="birthdate">
                            <label for="birthdate">Birthdate</label>
                        </div>

                    </div>

                    <div class="birthplace">

                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="birthdate-input" placeholder="" name="birthplace">
                            <label for="birthplace">Place of birth</label>
                        </div>
                        
                    </div>

                </div>

                <div class="form-wrapper4">

                    <div class="gender">
                        <div class="form-floating" style="width: 200px;">
                            <select class="form-select" id="gender-input" name="gender" required>
                                <option selected>Select..</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="gender">Gender</label>
                        </div>
                    </div>

                    <div class="civilstatus">

                        <div class="form-floating" style="width: 200px;">
                            <select class="form-select" id="civilstatus-input" name="civilstatus" required>
                                <option selected>Select..</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Separated">Separated</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                            <label for="civilstatus">Civil status</label>
                        </div>

                    </div>

                    <div class="religion">
                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="religion-input" placeholder="" name="religion">
                            <label for="religion">Religion</label>
                        </div>
                    </div>

                    <div class="nationality">
                        <div class="form-floating" style="width: 200px;">
                            <input type="text" class="form-control" id="nationality-input" placeholder="" name="nationality" required>
                            <label for="nationality">Nationality</label>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="create">Save changes</button>
            </div>

            </form>

          </div>
        </div>
    
      </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
let deleteInProgress = false;

document.getElementById('delete-button').addEventListener('click', function() {
    const selectColumn = document.querySelectorAll('.select-column');
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    const cancelButton = document.getElementById('cancel-button');

    if (!deleteInProgress) {
        // First click: Show the select column and checkboxes
        selectColumn.forEach(cell => {
            cell.style.display = 'table-cell';
        });
        checkboxes.forEach(checkbox => {
            checkbox.style.display = 'inline'; // Ensure checkboxes are visible
        });
        cancelButton.style.display = 'inline'; // Show the cancel button
        deleteInProgress = true; // Set the flag to true
    } else {
        // Second click: Confirm deletion
        const selectedIds = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedIds.push(checkbox.value); // Get the ID from the checkbox value
            }
        });

        // Confirm deletion
        if (selectedIds.length > 0) {
            const confirmation = confirm("Are you sure you want to delete the selected records?");
            if (confirmation) {
                // Send AJAX request to delete records
                fetch('{{ route("user-records.delete") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                    },
                    body: JSON.stringify({ delete: selectedIds }) // Send selected IDs as JSON
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect to user records page after successful deletion
                        window.location.href = '{{ route("user-records") }}';
                    } else {
                        alert("An error occurred while deleting records.");
                    }
                })
                .catch(error => console.error("Error:", error));
            }
        } else {
            alert("No records selected for deletion.");
        }
        deleteInProgress = false; // Reset the flag
    }
});

// Cancel button functionality
document.getElementById('cancel-button').addEventListener('click', function() {
    const selectColumn = document.querySelectorAll('.select-column');
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    const cancelButton = document.getElementById('cancel-button');

    // Hide the select column and checkboxes
    selectColumn.forEach(cell => {
        cell.style.display = 'none';
    });
    checkboxes.forEach(checkbox => {
        checkbox.checked = false; // Uncheck all checkboxes
        checkbox.style.display = 'none'; // Hide checkboxes
    });
    cancelButton.style.display = 'none'; // Hide the cancel button
    deleteInProgress = false; // Reset the flag
});

// Select All functionality
document.getElementById('select-all').addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('.form-check-input.records');
    checkboxes.forEach(checkbox => {
        checkbox.checked = this.checked; // Set each checkbox to the state of the "Select All" checkbox
    });
});

</script>
<script src="assets/js/modal.js"></script>
<script src="assets/js/img-lock.js"></script>
<script src="assets/js/responsive.js"></script>

</body>

</html>