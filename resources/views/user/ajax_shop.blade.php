       
                                @foreach($product_shop as $product)
                                <div class="body-index-products colum-1-9">
                                    <a href="{{route('detail_product',$product->id)}}">
                                        <div class="body-index-products-info">
                                            <div class="body-index-products-img ">
                                                <img src="{{asset('storage/'.$product->previewImage)}}" alt="" class="product-img-index">
                                            </div>
                                            <div class="body-index-products-detail">
                                                <div class="body-index-products-detail-name">
                                                    <div id="body-index-products-detail-name-span">
                                                        {{$product->productName}}
                                                    </div>
                                                </div>
                                                <div class="body-index-products-detail-price">
                                                    <div id="body-index-products-detail-price-span">
                                                        {{number_format($product->price, 0, ',', '.') }}đ
                                                    </div>
                                                </div>
                                                <div class="body-index-products-detail-sold">
                                                    <div id="body-index-products-detail-sold-span">
                                                        @if($product->sales_quantity > 1)
                                                            Đã bán {{$product->sales_quantity}}
                                                        @else
                                                            Đã bán 0
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                @if(isset($subcategory_id))
                                    <input type="hidden" id="subcategory_id" value="{{$subcategory_id}}"/>
                                @endif
                                @if(isset($arrange))
                                    <input type="hidden" id="arrange" value="{{$arrange}}"/>
                                @endif