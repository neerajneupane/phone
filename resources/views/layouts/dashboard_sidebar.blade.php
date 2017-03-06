        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"> {{ Auth::user()->name }}</div>
            <div class="panel-body">
               
                  <ul class="nav nav-sidebar">
                                    <li><a href="/dashboard"><span class='glyphicon glyphicon-dashboard'></span> Dashboard</a></li>
                                    <li><a href="/addProduct"><span class='glyphicon glyphicon-plus-sign'></span> Post a new Ad</a></li>
                                    <li><a href="/myAds"><span class='glyphicon glyphicon-th-list'></span> My Ads</a></li>
                                    <li><a href="/updateprofile"><span class='glyphicon glyphicon-user'></span> Update Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class='glyphicon glyphicon-log-out'></span> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>

            </div>
            </div>
         </div> 