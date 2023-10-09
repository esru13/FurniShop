@include('admin/new.head')

    @include('admin/new.nav')
 

    <section class="main">
    @include('admin/new.side')
        <div class="main--container">
            <div class="section--title">
                <h3 class="title">Welcome back, Jenny</h3>
                <select name="date" id="date">
                    <option value="last7">Last 7 days</option>
                    <option value="lastmonth">Last month</option>
                    <option value="lastyear">Last year</option>
                    <option value="alltime">All time</option>
                </select>
            </div>
            <div class="cards">
                <div class="card card-1">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-shopping-bag-2-line"></i></span>
                        <span>Sales</span>
                    </div>
                    <h3 class="card--value">$432,576.34 <i class="ri-arrow-up-circle-fill up"></i></h3>
                    <h5 class="more">4,234 more than usual</h5>
                    <div class="chart">
                        <canvas id="sales"></canvas>
                    </div>
                </div>
                <div class="card card-2">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-gift-line"></i></span>
                        <span>Orders</span>
                    </div>
                    <h3 class="card--value">2,567 <i class="ri-arrow-down-circle-fill down"></i></h3>
                    <h5 class="less">234 less than usual</h5>
                    <div class="chart">
                        <canvas id="orders"></canvas>
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-handbag-line"></i></span>
                        <span>Products</span>
                    </div>
                    <h3 class="card--value">587 <i class="ri-arrow-up-circle-fill up"></i></h3>
                    <h5 class="more">23 more than usual</h5>
                    <div class="chart">
                        <canvas id="products"></canvas>
                    </div>
                </div>
                <div class="card card-4">
                    <div class="card--title">
                        <span class="card--icon icon"><i class="ri-user-line"></i></span>
                        <span>Customers</span>
                    </div>
                    <h3 class="card--value">4,300 <i class="ri-arrow-down-circle-fill down"></i></h3>
                    <h5 class="less">34 less than usual</h5>
                    <div class="chart">
                        <canvas id="customers"></canvas>
                    </div>
                </div>
            </div>
            <div class="target-vs-sales--container">
                <div class="section--title">
                    <h3 class="title">Sales difference</h3>
                    <div class="sales--value">
                        <div class="target">
                            <i class="ri-checkbox-blank-circle-fill circle"></i>
                            Target <span>&nbsp; sales</span>
                        </div>
                        <div class="current">
                            <i class="ri-checkbox-blank-circle-fill circle"></i>
                            Current <span>&nbsp; sales</span>
                        </div>
                    </div>
                </div>
                <div class="target--vs--sales">
                    <canvas id="tarsale"></canvas>
                </div>
            </div>
            <div class="table">
                <div class="section--title">
                    <h3 class="title">Top products</h3>
                    <div></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Order ID</th>
                            <th>Price</th>
                            <th>Sold</th>
                            <th>Returned</th>
                            <th>Sales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                        <tr>
                            <td>MacBook Air AAPL</td>
                            <td>#231234</td>
                            <td>$1846</td>
                            <td>331</td>
                            <td>12</td>
                            <td>$337,218.54</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sales.js"></script>
    <script src="assets/js/orders.js"></script>
    <script src="assets/js/products.js"></script>
    <script src="assets/js/customers.js"></script>
    <script src="assets/js/tarsale.js"></script>

</body>

</html>