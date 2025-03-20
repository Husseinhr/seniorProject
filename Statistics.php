<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Statistic Dashboard</title>
    <link rel="stylesheet" href="employe.css" />
  </head>
    <!-- nav bar -->


    <div class="main-layout">
      <main class="main">
        <!-- Row 1 -->
        <div class="row-1">
          <div class="box active-users">
            <h2 class="box-title">
              Active Users
            </h2>
            <h1 class="number-fs">72</h1>
            <div class="box-footer">
              <a href="#referrals"
                >View Referrals
                <img src="./img/arrow-right.svg" alt="arrow" />
              </a>
            </div>
          </div>
          <div class="box page-views">
            <h2 class="box-title">Page views per minute</h2>
            <div class="graph">
              <div aria-label="66 page views" style="height: 66%;"></div>
              <div aria-label="18 page views" style="height: 18%;"></div>
              <div aria-label="34 page views" style="height: 34%;"></div>
              <div aria-label="75 page views" style="height: 75%;"></div>
              <div aria-label="15 page views" style="height: 15%;"></div>
              <div aria-label="94 page views" style="height: 94%;"></div>
              <div aria-label="95 page views" style="height: 95%;"></div>
              <div aria-label="17 page views" style="height: 17%;"></div>
              <div aria-label="32 page views" style="height: 32%;"></div>
              <div aria-label="76 page views" style="height: 76%;"></div>
              <div aria-label="80 page views" style="height: 80%;"></div>
              <div aria-label="89 page views" style="height: 89%;"></div>
              <div aria-label="63 page views" style="height: 63%;"></div>
              <div aria-label="36 page views" style="height: 36%;"></div>
              <div aria-label="82 page views" style="height: 82%;"></div>
              <div aria-label="10 page views" style="height: 10%;"></div>
              <div aria-label="27 page views" style="height: 27%;"></div>
              <div aria-label="19 page views" style="height: 19%;"></div>
              <div aria-label="5 page views" style="height: 5%;"></div>
              <div aria-label="59 page views" style="height: 59%;"></div>
              <div aria-label="18 page views" style="height: 18%;"></div>
            </div>
            <div class="box-footer">
              <a href="#referrals"
                >View Referrals
                <img src="./img/arrow-right.svg" alt="arrow" />
              </a>
            </div>
          </div>
        </div>

        <!-- Row 2 - main stats -->
        <div class="row-2">
          <div class="stat-box">
            <div class="stat-title">
              <span>Users</span>
              <span class="stat-percentage green">
                <img src="./img/arrow-up-green.svg" alt="" />268%
              </span>
            </div>
            <h1 class="number-fs">
              15K
            </h1>
          </div>
          <div class="stat-box">
            <div class="stat-title">
              Sessions
              <span class="stat-percentage green">
                <img src="./img/arrow-up-green.svg" alt="" />268%
              </span>
            </div>
            <h1 class="number-fs">
              17K
            </h1>
          </div>
          <div class="stat-box">
            <div class="stat-title">
              Bounce Rate
              <span class="stat-percentage red">
                <img src="./img/arrow-up-red.svg" alt="" />19%
              </span>
            </div>
            <h1 class="number-fs">
              62.57%
            </h1>
          </div>
          <div class="stat-box">
            <div class="stat-title">
              Session Duration
              <span class="stat-percentage red">
                <img src="./img/arrow-down-red.svg" alt="" />29.7%
              </span>
            </div>
            <h1 class="number-fs">
              1m 37s
            </h1>
          </div>
        </div>

        <!-- Row 4 - Devices -->
        <div class="row-4">
          <div class="box device-box">
            <div class="box-title">Devices</div>
            <div class="select-months">
              <div class="select-month active">
                May
              </div>
              <div class="select-month">
                June
              </div>
              <div class="select-month">
                July
              </div>
              <div class="select-month">
                August
              </div>
            </div>
            <div class="month-info">
              <div class="month-info-box">
                Desktop | 52%
                <div class="month-bar" style="width: 62%;"></div>
              </div>
              <div class="month-info-box">
                Tablet | 15%
                <div class="month-bar" style="width: 25%;"></div>
              </div>
              <div class="month-info-box">
                Mobile | 36%
                <div class="month-bar" style="width: 46%;"></div>
              </div>
            </div>
          </div>
          <div class="box device-box">
            <div class="box-title">References</div>
            <div class="reference-details">
              <div class="reference">
                <span>Direct</span>
                <span>24</span>
              </div>
              <div class="reference">
                <span>Search</span>
                <span>18</span>
              </div>
              <div class="reference">
                <span>Github</span>
                <span>12</span>
              </div>
              <div class="reference">
                <span>Discord</span>
                <span>8</span>
              </div>
              <div class="reference">
                <span>Other</span>
                <span>2</span>
              </div>
            </div>
          </div>
        </div>
      </main>
      
    </div>
    <script src="Statistics.js"></script>
</html>