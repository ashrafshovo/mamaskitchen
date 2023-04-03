    <div class="sidebar" data-color="purple" data-image="{{ asset('back/img/sidebar-1.jpg') }}">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="{{ route('admin.dashboard') }}" class="simple-text">
                    Admin Panel
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
                    <li class="{{ Request::is('admin/profile*')? 'active': '' }}">
                        <a href="{{ route('admin.profile') }}">
                            <i class="material-icons">account_circle</i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/admin*')? 'active': '' }}">
                        <a href="{{ route('admin.index') }}">
                            <i class="material-icons">manage_accounts</i>
                            <p>Admin</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/about*')? 'active': '' }}">
                        <a href="{{ route('about.index') }}">
                            <i class="material-icons">info</i>
                            <p>About</p>
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
                    <li class="{{ Request::is('admin/item*')? 'active': '' }}">
                        <a href="{{ route('item.index') }}">
                            <i class="material-icons">library_books</i>
                            <p>Items</p>
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/beer*')? 'active': '' }}">
                        <a href="{{ route('beer.index') }}">
                            <i class="material-icons">local_drink</i>
                            <p>Beer</p>
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/bread*')? 'active': '' }}">
                        <a href="{{ route('bread.index') }}">
                            <i class="material-icons">fastfood</i>
                            <p>Bread</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/reservation*')? 'active': '' }}">
                        <a href="{{ route('reservation.index') }}">
                            <i class="material-icons">chrome_reader_mode</i>
                            <p>Reservations</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/haveslider*')? 'active': '' }}">
                        <a href="{{ route('haveslider.index') }}">
                            <i class="material-icons">slideshow</i>
                            <p>Have a Look Sliders</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/menucategory*')? 'active': '' }}">
                        <a href="{{ route('menucategory.index') }}">
                            <i class="material-icons">menu</i>
                            <p>Menu Category</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/featureddish*')? 'active': '' }}">
                        <a href="{{ route('featureddish.index') }}">
                            <i class="material-icons">dehaze</i>
                            <p>Featured Dish</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/social*')? 'active': '' }}">
                        <a href="{{ route('social.index') }}">
                            <i class="material-icons">public</i>
                            <p>Social</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/contact*')? 'active': '' }}">
                        <a href="{{ route('contact.index') }}">
                            <i class="material-icons">message</i>
                            <p>Contact Message</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/footer*')? 'active': '' }}">
                        <a href="{{ route('footer.index') }}">
                            <i class="material-icons">web</i>
                            <p>Footer</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
