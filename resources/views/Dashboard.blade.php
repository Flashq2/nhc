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
                                <h3 class="nftmax-table__title mb-0">{{$page_title}}</h3>
                            </div>
                            <div class="tab-content" id="myTabContent">
                               @include('Layout.table_record')
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
