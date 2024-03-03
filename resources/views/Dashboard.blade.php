@include('Layout.Header')
<style>
	.nftmax-main__column{
		width: 100% !important;
	}
</style>
<!-- NFTmax Dashboard -->
<section class="nftmax-adashboard nftmax-show">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-12 nftmax-main__column">
                <div class="nftmax-body">
                    <!-- Dashboard Inner -->
                    <div class="nftmax-dsinner">
                        <div class="nftmax-table mg-top-40">
                            <div class="nftmax-table__heading">
                                <h3 class="nftmax-table__title mb-0">Room </h3>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="table_1" role="tabpanel"
                                    aria-labelledby="table_1">
                                    <!-- NFTMax Table -->
                                    <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
                                        <!-- NFTMax Table Head -->
                                        <thead class="nftmax-table__head">
                                            <tr>
                                                <th class="nftmax-table__column-1 nftmax-table__h1">All Products</th>
                                                <th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
                                                <th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
                                                <th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
                                                <th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
                                                <th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
                                                <th class="nftmax-table__column-7 nftmax-table__h7">Status</th>
                                            </tr>
                                        </thead>
                                        <!-- NFTMax Table Body -->
                                        <tbody class="nftmax-table__body">
                                            @foreach ($AllNFTSUpdate as $user)
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="{{ asset($user['0']) }}" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">
                                                                    {{ $user['1'] }}</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">{{ $user['2'] }}</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="assets/img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">{{ $user['3'] }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="assets/img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">{{ $user['4'] }}$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p
                                                            class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            {{ $user['5'] }}</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">
                                                            {{ $user['6'] }}</p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">
                                                            {{ $user['7'] }}</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
														<div class="nftmax-table__status nftmax-gbcolor">Completed
														</div>
													</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- End NFTMax Table Body -->
                                    </table>
                                    <!-- End NFTMax Table -->
                                </div>
 
                            </div>
                        </div>
                    </div>
                    <!-- End Dashboard Inner -->
                </div>
            </div>
            {{-- @include('Layout.RightSidebar')						 --}}
            @include('Layout.Footer')

            <script>
                const ctx = document.getElementById('myChart_one').getContext('2d');
                var day = @json($SellHistory[0]);
                var avgSell = @json($SellHistory[1]);
                var totalSell = @json($SellHistory[2]);
                const myChart_one = new Chart(ctx, {
                    type: 'bar',

                    data: {
                        labels: day,
                        datasets: [{
                            label: 'AVG Sale',
                            data: avgSell,
                            backgroundColor: [
                                '#5356FB',
                                '#5356FB',
                                '#5356FB',
                                '#5356FB',
                                '#5356FB',
                                '#5356FB',
                                '#5356FB',
                            ],

                            fill: true,
                            tension: 0.4,
                            borderWidth: 0,
                            borderSkipped: false,
                            borderRadius: 3,
                            barPercentage: 0.4,
                            categoryPercentage: 0.4,
                        }, {
                            label: 'Total Sell',
                            data: totalSell,
                            backgroundColor: [
                                '#F239F5',
                                '#F239F5',
                                '#F239F5',
                                '#F239F5',
                                '#F239F5',
                                '#F239F5',
                                '#F239F5',
                            ],
                            borderWidth: 0,
                            borderSkipped: false,
                            borderRadius: 3,
                            categoryPercentage: 0.4,
                            barPercentage: 0.4
                        }]
                    },

                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },

                            },
                            y: {
                                grid: {
                                    drawBorder: false,
                                },
                            },
                        },
                        plugins: {
                            legend: {
                                position: 'top',
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Sell History'
                            }
                        }
                    }
                });

                const ctx_two = document.getElementById('myChart_two').getContext('2d');
                var day = @json($MarketVisitor[0]);
                var visitor = @json($MarketVisitor[1]);
                const myChart_two = new Chart(ctx_two, {
                    type: 'line',

                    data: {
                        labels: day,
                        datasets: [{
                            label: 'Visitor',
                            data: visitor,
                            backgroundColor: '#FAECFF',
                            borderColor: '#DE3DF8',
                            pointRadius: 5,
                            pointBackgroundColor: '#fff',
                            pointBorderColor: '#AE8FF7',
                            tension: 0.6,
                            borderWidth: 4,
                            fill: true,
                            fillColor: '#fff',
                        }]
                    },

                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },

                            },
                            y: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    display: false
                                }
                            },
                        },

                        plugins: {
                            legend: {
                                position: 'top',
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Visitor: 2k'
                            }
                        }
                    }
                });


                const ctx_two_monthly = document.getElementById('myChart_two_monthly').getContext('2d');
                var day = @json($MarketVisitorMonthly[0]);
                var visitor = @json($MarketVisitorMonthly[1]);
                const myChart_two_monthly = new Chart(ctx_two_monthly, {
                    type: 'line',

                    data: {
                        labels: day,
                        datasets: [{
                            label: 'Visitor',
                            data: visitor,
                            backgroundColor: '#FAECFF',
                            borderColor: '#DE3DF8',
                            pointRadius: 5,
                            pointBackgroundColor: '#fff',
                            pointBorderColor: '#AE8FF7',
                            tension: 0.6,
                            borderWidth: 4,
                            fill: true,
                            fillColor: '#fff',
                        }]
                    },

                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },

                            },
                            y: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    display: false
                                }
                            },
                        },

                        plugins: {
                            legend: {
                                position: 'top',
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Visitor: 2k'
                            }
                        }
                    }
                });
                const ctx_two_weekly = document.getElementById('myChart_two_weekly').getContext('2d');
                var day = @json($MarketVisitorWeekly[0]);
                var visitor = @json($MarketVisitorWeekly[1]);
                const myChart_two_weekly = new Chart(ctx_two_weekly, {
                    type: 'line',

                    data: {
                        labels: day,
                        datasets: [{
                            label: 'Visitor',
                            data: visitor,
                            backgroundColor: '#FAECFF',
                            borderColor: '#DE3DF8',
                            pointRadius: 5,
                            pointBackgroundColor: '#fff',
                            pointBorderColor: '#AE8FF7',
                            tension: 0.6,
                            borderWidth: 4,
                            fill: true,
                            fillColor: '#fff',
                        }]
                    },

                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },

                            },
                            y: {
                                grid: {
                                    display: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    display: false
                                }
                            },
                        },

                        plugins: {
                            legend: {
                                position: 'top',
                                display: false,
                            },
                            title: {
                                display: false,
                                text: 'Visitor: 2k'
                            }
                        }
                    }
                });
            </script>

            </body>

            </html>
