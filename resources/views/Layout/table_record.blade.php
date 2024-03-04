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
        {{-- @foreach ($AllNFTSUpdate as $user)
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
        @endforeach --}}
    </tbody>
    <!-- End NFTMax Table Body -->
</table>
<!-- End NFTMax Table -->
</div>