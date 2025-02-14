
 <div class="app-sidebar sidebar-shadow">
      <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
              <div>
                  <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                      data-class="closed-sidebar">
                      <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                      </span>
                  </button>
              </div>
          </div>
      </div>
      <div class="app-header__mobile-menu">
          <div>
              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
      <div class="app-header__menu">
          <span>
              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                  <span class="btn-icon-wrapper">
                      <i class="fa fa-ellipsis-v fa-w-6"></i>
                  </span>
              </button>
          </span>
      </div>
      <div class="scrollbar-sidebar">
          <div class="app-sidebar__inner">
              <ul class="vertical-nav-menu">
                  <li class="app-sidebar__heading">Dashboards</li>
                  <li>
                      <a href="{{ route('admin.dashboard') }}" class="mm-active">
                          <i class="metismenu-icon pe-7s-home"></i>
                          Dashboard
                      </a>
                  </li>

                  <li>
                      <a href="{{ url('admin/general') }}">
                          <i class="metismenu-icon fa fa-bookmark"></i>
                       General Info

                      </a>
                  </li>
                  <li>
                    <a href="{{ url('admin/slider') }}">
                        <i class="metismenu-icon fa fa-file-text-o"></i>
                        <span>Slider Info</span>

                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/service') }}">
                        <i class="metismenu-icon fa fa-file-text-o"></i>
                        <span>Service Info</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/news') }}">
                        <i class="metismenu-icon fa fa-language"></i>
                        <span>News Info</span>

                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/facultymember') }}">
                        <i class="metismenu-icon fa fa-gavel"></i>
                        <span>Committe Member Info</span>

                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/brands') }}">
                        <i class="metismenu-icon fa fa-file-text-o"></i>
                        <span>Brands Info</span>

                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/gallery') }}">
                        <i class="metismenu-icon fa fa-file-text-o"></i>
                        <span>Gallery Info</span>

                    </a>
                </li>
                <li>
                    <a href="{{url ('admin/message') }}">
                        <i class="metismenu-icon fa fa-envelope-o"></i>
                        <span>Inbox</span>

                    </a>
                </li>

                <li>
                    <a href=""><i class="metismenu-icon fa fa-lock"></i>  <span>Access Control</span>
                        <i class="metismenu-icon fa fa-angle-left arrow"></i>


                    </a>
                    <ul>
                        <li> <a href="{{ url('admin/roles') }}" >Roles</a> </li>
                        <li><a href="{{ url('admin/user') }}">User</a></li>
                    </ul>
                </li>

                <li>
                    <a href=""><i class="metismenu-icon fa fa-cog"></i>  <span>Syestem</span>
                        <i class="metismenu-icon fa fa-angle-left arrow"></i>
                    </a>
                        <ul>
                            <li> <a class="" href="">Backup</a> </li>
                            <li><a class="" href="">Log</a></li>
                            <li><a class="" href="">Setting</a></li>
                        </ul>



                </li>

                  {{-- <li class="app-sidebar__heading">UI Components</li>
                  <li>
                      <a href="index.html#">
                          <i class="metismenu-icon pe-7s-diamond"></i>
                          Elements
                          <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                      </a>
                      <ul>
                          <li>
                              <a href="elements-buttons-standard.html">
                                  <i class="metismenu-icon"></i>
                                  Buttons
                              </a>
                          </li>
                          <li>
                              <a href="elements-dropdowns.html">
                                  <i class="metismenu-icon">
                                  </i>Dropdowns
                              </a>
                          </li>
                          <li>
                              <a href="elements-icons.html">
                                  <i class="metismenu-icon">
                                  </i>Icons
                              </a>
                          </li>
                          <li>
                              <a href="elements-badges-labels.html">
                                  <i class="metismenu-icon">
                                  </i>Badges
                              </a>
                          </li>
                          <li>
                              <a href="elements-cards.html">
                                  <i class="metismenu-icon">
                                  </i>Cards
                              </a>
                          </li>
                          <li>
                              <a href="elements-list-group.html">
                                  <i class="metismenu-icon">
                                  </i>List Groups
                              </a>
                          </li>
                          <li>
                              <a href="elements-navigation.html">
                                  <i class="metismenu-icon">
                                  </i>Navigation Menus
                              </a>
                          </li>
                          <li>
                              <a href="elements-utilities.html">
                                  <i class="metismenu-icon">
                                  </i>Utilities
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="index.html#">
                          <i class="metismenu-icon pe-7s-car"></i>
                          Components
                          <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                      </a>
                      <ul>
                          <li>
                              <a href="components-tabs.html">
                                  <i class="metismenu-icon">
                                  </i>Tabs
                              </a>
                          </li>
                          <li>
                              <a href="components-accordions.html">
                                  <i class="metismenu-icon">
                                  </i>Accordions
                              </a>
                          </li>
                          <li>
                              <a href="components-notifications.html">
                                  <i class="metismenu-icon">
                                  </i>Notifications
                              </a>
                          </li>
                          <li>
                              <a href="components-modals.html">
                                  <i class="metismenu-icon">
                                  </i>Modals
                              </a>
                          </li>
                          <li>
                              <a href="components-progress-bar.html">
                                  <i class="metismenu-icon">
                                  </i>Progress Bar
                              </a>
                          </li>
                          <li>
                              <a href="components-tooltips-popovers.html">
                                  <i class="metismenu-icon">
                                  </i>Tooltips &amp; Popovers
                              </a>
                          </li>
                          <li>
                              <a href="components-carousel.html">
                                  <i class="metismenu-icon">
                                  </i>Carousel
                              </a>
                          </li>
                          <li>
                              <a href="components-calendar.html">
                                  <i class="metismenu-icon">
                                  </i>Calendar
                              </a>
                          </li>
                          <li>
                              <a href="components-pagination.html">
                                  <i class="metismenu-icon">
                                  </i>Pagination
                              </a>
                          </li>
                          <li>
                              <a href="components-scrollable-elements.html">
                                  <i class="metismenu-icon">
                                  </i>Scrollable
                              </a>
                          </li>
                          <li>
                              <a href="components-maps.html">
                                  <i class="metismenu-icon">
                                  </i>Maps
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="tables-regular.html">
                          <i class="metismenu-icon pe-7s-display2"></i>
                          Tables
                      </a>
                  </li>
                  <li class="app-sidebar__heading">Widgets</li>
                  <li>
                      <a href="dashboard-boxes.html">
                          <i class="metismenu-icon pe-7s-display2"></i>
                          Dashboard Boxes
                      </a>
                  </li>
                  <li class="app-sidebar__heading">Forms</li>
                  <li>
                      <a href="forms-controls.html">
                          <i class="metismenu-icon pe-7s-mouse">
                          </i>Forms Controls
                      </a>
                  </li>
                  <li>
                      <a href="forms-layouts.html">
                          <i class="metismenu-icon pe-7s-eyedropper">
                          </i>Forms Layouts
                      </a>
                  </li>
                  <li>
                      <a href="forms-validation.html">
                          <i class="metismenu-icon pe-7s-pendrive">
                          </i>Forms Validation
                      </a>
                  </li>
                  <li class="app-sidebar__heading">Charts</li>
                  <li>
                      <a href="charts-chartjs.html">
                          <i class="metismenu-icon pe-7s-graph2">
                          </i>ChartJS
                      </a>
                  </li> --}}
              </ul>
          </div>
      </div>
  </div>
