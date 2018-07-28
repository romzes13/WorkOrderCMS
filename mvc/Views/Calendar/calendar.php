<!doctype html>
<html>
 <head>

    <title>Calendar</title>
 <meta charset="utf-8">
 <!--   <link rel="stylesheet" href="styles.css"> -->
 <style><?php include 'CSS/calendar.css'; ?></style>

</head>

    <body>
    <main>
    <div id="calendar-wrap">

    <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      December<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>
        <!--    <header>
                <h1>December 2017</h1>
            </header>
        -->

            <div id="calendar">
                <ul class="weekdays">
                    <li>Sunday</li>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                    <li class="day other-month">
                        <div class="date">27</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">28</div>
                        <div class="event">
                            <div class="event-desc">
                                Bathroom remodeling
                            </div>
                            <div class="event-time">
                                1:00pm to 3:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day other-month">
                        <div class="date">29</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">30</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">31</div>
                    </li>

                    <!-- Days in current month -->

                    <li class="day">
                        <div class="date">1</div>
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                        <div class="event">
                            <div class="event-desc">
                                Windows replacement
                            </div>
                            <div class="event-time">
                                7:00am to 5:00pm
                            </div>
                        </div>
                    </li>
                </ul>

                    <!-- Row #2 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">3</div>
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                    </li>
                    <li class="day">
                        <div class="date">7</div>
                        <div class="event">
                            <div class="event-desc">
                                Front door replacement
                            </div>
                            <div class="event-time">
                                7:20am to 3:30pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">8</div>
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                    </li>
                </ul>

                    <!-- Row #3 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">10</div>
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                    </li>
                    <li class="day">
                        <div class="date">14</div><div class="event">
                            <div class="event-desc">
                                Grout bathroom in Clifton Park
                            </div>
                            <div class="event-time">
                                1:00pm to 3:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">15</div>
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                    </li>
                </ul>

                    <!-- Row #4 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">17</div>
                    </li>
                    <li class="day">
                        <div class="date">18</div>
                    </li>
                    <li class="day">
                        <div class="date">19</div>
                    </li>
                    <li class="day">
                        <div class="date">20</div>
                    </li>
                    <li class="day">
                        <div class="date">21</div>
                    </li>
                    <li class="day">
                        <div class="date">22</div>
                        <div class="event">
                            <div class="event-desc">
                                Replace a door handle
                            </div>
                            <div class="event-time">
                                9:00am to 10:00am
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">23</div>
                    </li>
                </ul>

                        <!-- Row #5 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">24</div>
                    </li>
                    <li class="day">
                        <div class="date">25</div>
                        <div class="event">
                            <div class="event-desc">
                                Painting
                            </div>
                            <div class="event-time">
                                1:00pm to 7:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">26</div>
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                    </li>
                    <li class="day">
                        <div class="date">29</div>
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                    </li>
                </ul>

                <!-- Row #6 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">31</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div> <!-- Next Month -->
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">3</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">4</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">5</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">6</div>
                    </li>
                </ul>

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->



</main>
</body>
</html>
