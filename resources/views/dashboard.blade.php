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
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-dashboard-index.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-modal.css')}}">
    </head>
        <body>
            
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
                    <a href="dashboard.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="home-btn">Home</span>
                    </a>
                </div>

                <div class="user-records">
                    <a href="user-records.php">
                        <i class="fa-solid fa-table"></i>
                        <span class="user-records-btn">User Records</span>
                    </a>
                </div>

                <div class="sessions">
                    <a href="sessions.html">
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
            
            <div class="dashboard">
                
                <div class="dashboard-container">

                    <h1 class="dashboard-title">Dashboard</h1>
                    
                    <div class="dashboard-container1">
                        
                        <div class="card1">

                            <div class="card-content1">
                                <div class="card-header1">
                                    <span class="card-title1">Total&nbsp;users</span>
                                    <div class="card-icon1">
                                    <i class="fa-solid fa-user-group"></i>
                                    </div>
                                </div>
                                
                                <h1 class="card-count1">{{$totalUsers}}</h1>
                            </div>

                        </div>

                        <div class="card2">

                            <div class="card-content2">
                                <div class="card-header2">
                                    <span class="card-title2">Students</span>
                                    <div class="card-icon2">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                </div>

                                <h1 class="card-count2">{{$totalStudents}}</h1>
                            </div>

                        </div>

                        <div class="card3">

                            <div class="card-content3">
                            <div class="card-header3">
                                <span class="card-title3">Tutors</span>
                                <div class="card-icon3">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                            </div>

                            <h1 class="card-count3">/*$tutorsCount*/</h1>
                            </div>

                        </div>

                        <div class="card4">

                            <div class="card-content4">
                            <div class="card-header4">
                                <span class="card-title4">Admins</span>
                                <div class="card-icon4">
                                <i class="fa-solid fa-person-military-pointing"></i>
                                </div>
                            </div>

                            <h1 class="card-count4">/*$adminsCount*/</h1>
                            </div>

                        </div>

                    </div>
                    
                    <div class="dashboard-container2">
                        
                        <div class="transaction-title">Transaction History</div>

                        <div class="transaction-wrapper">

                            <div class="transaction-container1">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Transaction</th>
                                            <th>Reference</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactionsLeft as $transaction)
                                            <tr>
                                                <td>{{$transaction->transaction_date}}</td>
                                                <td>{{$transaction->transaction_type}}</td>
                                                <td>{{$transaction->reference_number}}</td>
                                            </tr>
                                        @endforeach
                                </table>
                            
                            </div>
                            
                            <div class="transaction-container2">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Transaction</th>
                                            <th>Reference</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactionsRight as $transaction)
                                            <tr>
                                                <td>{{$transaction->transaction_date}}</td>
                                                <td>{{$transaction->transaction_type}}</td>
                                                <td>{{$transaction->reference_number}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            
                            </div>
                            
                        </div>
                    
                    <div class="all-transactions text-end" data-bs-toggle="modal" data-bs-target="#viewAllTransactionsModal">
                        <a href="#" class="view-all">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span class="all-transactions-btn">View All Transactions</span>
                        </a>
                    </div>

                    </div>
                    
                </div>

            </div>
        
        </div>
        
    </main>
    
    <!-- Modal for Transactions -->
    <div class="modal fade" id="viewAllTransactionsModal" tabindex="-1" aria-labelledby="viewAllTransactionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewAllTransactionsModalLabel">All Transactions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction</th>
                                <th>Reference</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

                <div class="all-transaction-buttons" id="pagination-buttons" style="display: flex; justify-content: flex-end; gap: 5px;">
                    <button class="btn btn-primary" type="button" onclick="loadModalPage(1)">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <!-- Generate pagination buttons dynamically -->
                    @for ($i = 1; $i <= $totalPages; $i++)
                        <button class="btn btn-primary" type="button" onclick="loadModalPage({{ $i }})">
                            {{ $i }}
                        </button>
                    @endfor
                    
                    <button class="btn btn-primary" type="button" onclick="loadModalPage(2)">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn" class="footer-image">
        <p class="copyright">
            © 2024 RendeLearn. All righs reserved.
        </p>
        
        <p class="socials">
            
        </p>
    </footer>

    </body>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#viewAllTransactionsModal').on('show.bs.modal', function () {
        loadModalPage(1); // Automatically load the first page
    });

    function loadModalPage(page) {
        $.ajax({
            url: '/transactions?page=' + page, // Adjust URL as necessary
            type: 'GET',
            success: function(data) {
                $('#modal-body tbody').empty(); // Clear existing data
                data.transactions.forEach(function(transaction) {
                    $('#modal-body tbody').append(`
                        <tr>
                            <td>${transaction.transaction_date}</td>
                            <td>${transaction.transaction_type}</td>
                            <td>${transaction.reference_number}</td>
                        </tr>
                    `);
                });
            },
            error: function() {
                console.error('Error loading transactions');
            }
        });
    }
    </script>
    <script src="{{asset('assets/js/modal.js')}}"></script>
    <script src="{{asset('assets/js/img-lock.js')}}"></script>
    <script src="{{asset('assets/js/responsive.js')}}"></script>
</body>
</html>