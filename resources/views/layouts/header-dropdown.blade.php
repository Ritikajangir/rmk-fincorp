<div class="dropdown user-dropdown desktop-mode">
    <button class="dropdown-toggle ms-auto p-0" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false" tabIndex="0">
        <div class="img-user">
            AU
        </div>
        <div class="name-dta d-flex align-items-end">
            <div class="welcome-user">
                <span class="welcome">Welcome</span>
                <span class="user-name-title">{{ auth()->guard('admin')->name }}</span>
            </div>
            <span class="arrow-icon ms-2">
                <svg tabindex="-1" width="10" height="5" viewBox="0 0 14 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg" tabindex="-1">
                    <path tabindex="-1" d="M13.002 7L7.00195 0.999999L1.00195 7" stroke="#102846" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" tabindex="-1"></path>
                </svg>
            </span>
        </div>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <ul class="list-unstyled mb-0">
            <li>
                <div class="dropdown-item" tabindex="-1"><span>Username:</span> {{ auth()->guard('admin')->name }}</div>
            </li>
            <li>
                <div class="dropdown-item" tabindex="-1"><span>Email:</span> {{ auth()->guard('admin')->user()->email }}</div>
            </li>
            <li>
                <a class="dropdown-item logout-item-anchor" href="{{route('admin.change-password')}}" title="Change Password" tabIndex="0">
                    <span>Change Password </span>
                </a>
            </li>
            <li>
                <a class="dropdown-item logout-item-anchor" href="javascript:void(0)" data-url="{{route('admin.logout')}}" title="Logout" id="logout-btn" tabIndex="0">
                    <span>Logout </span>
                    <div class="menu-img">
                        <img src="{{asset('assets/images/log-out.svg')}}" alt="Logout">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>