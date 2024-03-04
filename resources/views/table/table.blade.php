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
                                <div class="tab-pane fade show active" id="table_1" role="tabpanel"
                                aria-labelledby="table_1">
                                <!-- NFTMax Table -->
                                <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
                                    <!-- NFTMax Table Head -->
                                    <thead class="nftmax-table__head">
                                        <tr>
                                            <th></th>
                                            <th class="nftmax-table__column-1 nftmax-table__h1">Id</th>
                                            <th class="nftmax-table__column-2 nftmax-table__h2">Table Name</th>
                                            <th class="nftmax-table__column-3 nftmax-table__h3">Table ID</th>
                                           
                                        </tr>
                                    </thead>
                                    <!-- NFTMax Table Body -->
                                    <tbody class="nftmax-table__body">
                                        @foreach
                                        <tr>
                                            <td><button class="btn btn-primary" data-id="">Build</button></td>
                                            <td>1</td>
                                            <td>room</td>
                                            <td>1001</td>
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
            </body>

            </html>
