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

            </body>

            </html>
