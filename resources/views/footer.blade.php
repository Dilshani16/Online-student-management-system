<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="/css/footer.css">
</head>

<body>
  <!-- Footer -->
  <div  class="footer">
<footer class="text-center text-lg-start bg-dark text-muted">
    {{-- <footer class="footer"> --}}


    <section class="">
      <!-- Grid row -->
        <div class="row ">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4 mt-3" style="color: #fff">calendar</h6>
            <!-- Links -->
            <div class="calendar-footer">
                <table id="calendar">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <!-- Calendar days will be generated dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Include the JavaScript to generate the calendar -->
            <script>
                function generateCalendar() {
                    const today = new Date();
                    const currentMonth = today.getMonth();
                    const currentYear = today.getFullYear();
                    const currentDate = today.getDate();

                    const calendarBody = document.getElementById('calendar-body');
                    calendarBody.innerHTML = ''; // Clear previous content

                    const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

                    let date = 1;
                    for (let i = 0; i < 6; i++) {
                        const row = document.createElement('tr');

                        for (let j = 0; j < 7; j++) {
                            const cell = document.createElement('td');

                            if (i === 0 && j < firstDay) {
                                const emptyCell = document.createElement('td');
                                row.appendChild(emptyCell);
                            } else if (date > daysInMonth) {
                                break;
                            } else {
                                cell.textContent = date;

                                // Highlight current date
                                if (date === currentDate) {
                                    cell.classList.add('current-date');
                                }

                                row.appendChild(cell);
                                date++;
                            }
                        }

                        calendarBody.appendChild(row);

                        // Stop adding rows if dates are finished
                        if (date > daysInMonth) {
                            break;
                        }
                    }
                }

                // Call the function to generate the calendar when the page loads
                document.addEventListener('DOMContentLoaded', generateCalendar);
            </script>


          </div>
          <!-- Grid column -->



          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 mt-3" style="color: #fff">Contact</h6>
            <p style="color: #fff"><i class="fas fa-home me-3"><img src="/img/map.png"></i> Malabe, Sri Lanka</p>
            <p style="color: #fff"><i class="fas fa-phone me-3"><img src="/img/phone.png"></i> + 94 234 567 88</p><br>

            <a href="#" style="color: #fff"><i class="fas fa-phone me-3"></i><i class="me-3"><img src="/img/email.png"></i>scholar@gmail.com</a><br><br>
            <a href="#" style="color: #fff"><i class="fas fa-phone me-3"></i><i class="me-3"><img src="/img/Facebook.png"></i>Facebook</a>
            <a href="#" style="color: #fff"><i class="me-3"><img src="/img/insta.png"></i>Instagram</a>
            <a href="#" style="color: #fff"><i class="me-3"><img src="/img/twitter.png"></i>Twitter</a><br>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(255, 248, 248, 0.055); color:#fff">
      © 2025 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="color: #fff">Scholar.com</a>
    </div>

  </footer>

</div>
</body>
</html>
