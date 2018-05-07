<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ Request::is('admin/dashboard*')? 'active': '' }}">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/slider*')? 'active': '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="material-icons">slideshow</i>
                            <p>Sliders</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category*')? 'active': '' }}">
                        <a href="{{ route('category.index') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/typography*')? 'active': '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="material-icons">library_books</i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/icons*')? 'active': '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/maps*')? 'active': '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/notifications*')? 'active': '' }}">
                        <a href="{{ route('slider.index') }}">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
