<div class="tab-pane fade show active" id="table_1" role="tabpanel" aria-labelledby="table_1">
    <!-- NFTMax Table -->
    <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
        <!-- NFTMax Table Head -->
        <thead class="nftmax-table__head">
            <tr>
                <?php $i = 0; ?>

                @foreach ($col_record as $col)
                    <?php $i += 1; ?>
                    <th class="text-left" style="width:100px !important;text-align:left;">{{ $col->filed_name }}</th>
                @endforeach
                <th></th>

            </tr>
        </thead>
        <!-- NFTMax Table Body -->
        <tbody>
            @foreach ($records as $item)
                <tr>
                    @foreach ($col_record as $col)
                        <?php $i = 0; ?>
                        <?php
                            $col_name = $col->filed_name;
                            $i += 1;
                        ?>
                        @if ($col_name == 'img')
                            <td>
                                <div class="nftmax-table__product">

                                    <div class="nftmax-table__product-img">
                                        <img src="{{ asset($item->$col_name ? $item->$col_name : 'assets/img/current-balance__bg.png') }}"
                                            alt="#">
                                    </div>

                                </div>
                            </td>
                        @else
                            <td>
                                <div>
                                    <span style="text-align: left;">{{ $item->$col_name }}</span>

                                </div>
                            </td>
                        @endif
                    @endforeach
                    <th><a href="{{url('/room/room_card?code=').$item->code}}"><button class="btn btn-primary">Edit</button></a></th>
                </tr>
            @endforeach

        </tbody>
        <!-- End NFTMax Table Body -->
    </table>
    <!-- End NFTMax Table -->
</div>
