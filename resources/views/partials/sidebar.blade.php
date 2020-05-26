
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>eLearner</h3>
        </div>
        
        <ul class="list-unstyled components">
            <p>Filter</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Course name</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">name 1</a>
                    </li>
                    <li>
                        <a href="#">name 2</a>
                    </li>
                    <li>
                        <a href="#">name 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <!-- We'll fill this with dummy content -->
        
    </div>

<style>
    /* .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    } */

    #sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
    }
    
    #sidebar.active {
    margin-left: -250px;
    }

    a[data-toggle="collapse"] {
    position: relative;
    }
    
    .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    }

    @media (max-width: 768px) {
    #sidebar {
    margin-left: -250px;
    }
    #sidebar.active {
    margin-left: 0;
    }
    }


</style>

<script>
    $(document).ready(function () {
    
    $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    });
    
    });
</script>