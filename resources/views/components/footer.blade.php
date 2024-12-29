<!-- Footer -->
<footer class="bg-light shadow-lg py-3 ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo & Description Column -->
            <div class="col-lg-4 mb-3 mb-lg-0">
                <!-- Logo -->
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="img-fluid mb-2" style="max-width: 120px;">
                
                <!-- Description - dengan text yang lebih pendek -->
                <p class="text-secondary mb-2 small">
                    Tel-U Timetable adalah aplikasi untuk membantu mahasiswa Tel-U dalam mengelola jadwal perkuliahan secara efisien dan terstruktur.
                </p>
                
                <!-- Social Media Icons -->
                <div class="d-flex gap-2">
                    <!-- Instagram -->
                    <a href="#" class="text-secondary transition">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16C13.0609 16 14.0783 15.5786 14.8284 14.8284C15.5786 14.0783 16 13.0609 16 12C16 10.9391 15.5786 9.92172 14.8284 9.17157C14.0783 8.42143 13.0609 8 12 8C10.9391 8 9.92172 8.42143 9.17157 9.17157C8.42143 9.92172 8 10.9391 8 12C8 13.0609 8.42143 14.0783 9.17157 14.8284C9.92172 15.5786 10.9391 16 12 16Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3 16V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8V16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21H8C6.67392 21 5.40215 20.4732 4.46447 19.5355C3.52678 18.5979 3 17.3261 3 16Z" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </a>
                    
                    <!-- Facebook -->
                    <a href="#" class="text-secondary transition">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"/>
                        </svg>
                    </a>
                    
                    <!-- Twitter/X -->
                    <a href="#" class="text-secondary transition">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.941 10.392L21.5355 1.5H19.7355L13.143 9.2205L7.875 1.5H1.8L9.765 13.176L1.8 22.5H3.6L10.563 14.346L16.1265 22.5H22.2015L13.941 10.392ZM11.4765 13.278L10.6695 12.1155L4.248 2.865H7.0125L12.1935 10.3305L13.0005 11.493L19.737 21.198H16.9725L11.4765 13.278Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Menu Columns -->
            <div class="col-lg-8">
                <div class="row justify-content-end">
                    <!-- About Column -->
                    <div class="col-md-4 mb-2 mb-md-0">
                        <h6 class="fw-semibold mb-2">Tel-U Timetable</h6>
                        <p class="small mb-0">Tentang Kami</p>
                    </div>

                    <!-- Menu Links Column -->
                    <div class="col-md-4 mb-2 mb-md-0">
                        <h6 class="fw-semibold mb-2">Menu</h6>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-1">
                                <a href="jadwal.php" class="text-decoration-none text-secondary hover-link">Jadwal</a>
                            </li>
                            
                            <li>
                                <a href="beranda.php" class="text-decoration-none text-secondary hover-link">Beranda</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Column -->
                    <div class="col-md-4">
                        <h6 class="fw-semibold mb-2">Kontak</h6>
                        <div class="small">
                            <!-- Email -->
                            <div class="d-flex align-items-center mb-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="me-2" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM19.6 8.25L12.53 12.67C12.21 12.87 11.79 12.87 11.47 12.67L4.4 8.25C4.15623 6.96079 4.23632 6.87666 4.33073 6.811C4.42513 6.74533 4.53187 6.69951 4.6445 6.6763C4.75712 6.65309 4.87328 6.65297 4.98595 6.67595C5.09863 6.69893 5.20546 6.74453 5.3 6.81L12 11L18.7 6.81C18.7945 6.74453 18.9014 6.69893 19.014 6.67595C19.1267 6.65297 19.2429 6.65309 19.3555 6.6763C19.4681 6.69951 19.5749 6.74533 19.6693 6.811C19.7637 6.87666 19.8438 6.96079 19.9047 7.0583C19.9657 7.15581 20.0062 7.26468 20.0238 7.37831C20.0415 7.49194 20.0359 7.60796 20.0074 7.71937C19.9789 7.83078 19.9281 7.93525 19.8581 8.02645C19.7881 8.11766 19.7003 8.19371 19.6 8.25Z"/>
                                </svg>
                                <span>ttable@gmail.com</span>
                            </div>
                            
                            <!-- Phone -->
                            <div class="d-flex align-items-center">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="me-2" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.62 10.79C8.06 13.62 10.38 15.94 13.21 17.38L15.41 15.18C15.69 14.9 16.08 14.82 16.43 14.93C17.55 15.3 18.75 15.5 20 15.5C20.2652 15.5 20.5196 15.6054 20.7071 15.7929C20.8946 15.9804 21 16.2348 21 16.5V20C21 20.2652 20.8946 20.5196 20.7071 20.7071C20.5196 20.8946 20.2652 21 20 21C15.4913 21 11.1673 19.2089 7.97918 16.0208C4.79107 12.8327 3 8.50868 3 4C3 3.73478 3.10536 3.48043 3.29289 3.29289C3.48043 3.10536 3.73478 3 4 3H7.5C7.76522 3 8.01957 3.10536 8.20711 3.29289C8.39464 3.48043 8.5 3.73478 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"/>
                                </svg>
                                <span>0856-4142-1197 (salma)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS -->
<style>
    footer {
        background: white;
        z-index: 10;
    }
    
.transition {
    transition: all 0.3s ease;
}

.hover-link:hover {
    color: #dc3545 !important;
    transform: scale(1.1);
}

.text-secondary svg:hover {
    color: #dc3545;
    transform: scale(1.25);
}
</style>