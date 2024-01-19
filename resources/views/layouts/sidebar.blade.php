<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand'>
            <div class="row">
                <span class="sidebar-brand-text align-items-center col-4">
                    <img style="max-width: 70px; max-height: 70px;" src="{{ asset('icons/dost_seal.png') }}" alt="Image Description">
                </span>
                <div style="margin-top: 5px" class="col-6">DOST REGION XI</div>


            </div>

        </a>


        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main Pages
            </li>
            <li class="{{ request()->is('dashboard') || request()->is('getallyearfilter') ? 'sidebar-item active' : 'sidebar-item' }}">
                <a class='sidebar-link' href='{{ route('dashboard') }}'>
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>


            <li class="sidebar-item {{ request()->is('seilist') || request()->is('seilist2') ? 'active' : '' }}">
                <a data-bs-target="#seilist1" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">SEI</span>
                </a>
                <ul id="seilist1" class="sidebar-dropdown list-unstyled collapse {{ request()->is('seilist') || request()->is('seilist2') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ request()->is('seilist') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('seilist') }}'>Qualifiers</a>
                    </li>
                    <li class="sidebar-item {{ request()->is('seilist2') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('seilist2') }}'>Potential Qualifiers </a></li>
                </ul>
            </li>


            <li id="" class="sidebar-item {{ request()->is('emails') ? 'active' : '' }}">
                <a class='sidebar-link' href='{{ route('emails') }}'>
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Reply Slip Status</span>
                </a>
            </li>



            <li class="sidebar-item {{ request()->is('rsms') || request()->is('rsmslistra7687') || request()->is('viewscholarrecords*') || request()->is('ongoinglist*') || request()->is('rsms2*') ? 'active' : '' }}">
                <a data-bs-target="#rsms1" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Academic
                        Monitoring</span>
                </a>
                <ul id="rsms1" class="sidebar-dropdown list-unstyled collapse {{ request()->is('rsms') || request()->is('rsmslistra7687') || request()->is('rsmslistra10612') || request()->is('rsmslistmerit') || request()->is('rsms2*') || request()->is('ongoinglistsview1*') || request()->is('ongoinglist') ? 'show' : '' }}" data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ request()->is('ongoinglist') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('ongoinglist') }}'>On-Going</a>
                    </li>

                    <li class="sidebar-item {{ request()->is('rsmslistra7687') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('rsmslistra7687') }}'>List RA7687 </a></li>

                    <li class="sidebar-item {{ request()->is('rsmslistra10612') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('rsmslistra10612') }}'>List RA10612 </a></li>

                    <li class="sidebar-item {{ request()->is('rsmslistmerit') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('rsmsmerit') }}'>List Merit </a></li>

                    <li class="sidebar-item {{ request()->is('rsmslistnoncompliance') ? 'active' : '' }}"><a class='sidebar-link' href='{{ route('rsmsnoncompliance') }}'>Non Compliance </a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Actions
            </li>
            <li id="" class="{{ request()->is('emaileditor') ? 'sidebar-item active' : 'sidebar-item' }}">
                <a class='sidebar-link' href='{{ route('emaileditor') }}'>
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Email Edit</span>
                </a>
            </li>


            {{--                ACCESS CONTROL TAB --}}

            <li class="{{ request()->is('accesscontrol') || request()->is('accesscontrolongoing') || request()->is('accesscontrolpending') || request()->is('accesscontrolenrolled') || request()->is('accesscontroldeferred') || request()->is('accesscontrolLOA') || request()->is('accesscontrolterminated') ? 'sidebar-item active' : 'sidebar-item' }}">
                <a data-bs-target="#accesscont1" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="lock"></i><span class="align-middle">Access Control</span>
                </a>
                <ul id="accesscont1" class="sidebar-dropdown list-unstyled collapse {{ request()->is('accesscontrol') || request()->is('accesscontrolongoing') || request()->is('accesscontrolpending') || request()->is('accesscontrolenrolled') || request()->is('accesscontroldeferred') || request()->is('accesscontrolLOA') || request()->is('accesscontrolterminated') ? 'show' : ' ' }}" data-bs-parent="#sidebar">

                    <li class="sidebar-item {{ request()->is('accesscontrol') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrol') }}'>Show All</a></li>
                    <li class="sidebar-item {{ request()->is('accesscontrolpending') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrolpending') }}'>Pending </a></li>
                    <li style="display: none;" class="sidebar-item {{ request()->is('accesscontrolongoing') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrolongoing') }}'>Ongoing </a></li>
                    <li style="" class="sidebar-item {{ request()->is('accesscontrolenrolled') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrolenrolled') }}'>Enrolled </a></li>
                    <li class="sidebar-item {{ request()->is('accesscontroldeferred') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontroldeferred') }}'>Deferred </a></li>
                    <li class="sidebar-item {{ request()->is('accesscontrolLOA') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrolLOA') }}'>LOA </a></li>
                    <li class="sidebar-item {{ request()->is('accesscontrolterminated') ? 'active' : ' ' }}"><a class='sidebar-link' href='{{ route('accesscontrolterminated') }}'>Terminated </a></li>
                </ul>
            </li>

        </ul>

        {{-- <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Weekly Sales Report</strong>
                <div class="mb-3 text-sm">
                    Your weekly sales report is ready for download!
                </div>

                <div class="d-grid">
                    <a href="https://adminkit.io/" class="btn btn-outline-primary" target="_blank">Download</a>
                </div>
            </div>
        </div> --}}
    </div>
</nav>
