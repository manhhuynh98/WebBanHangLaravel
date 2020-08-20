<thead>
    <tr>
        <th scope="col">Sản phẩm</th>
        <th scope="col">Giá tiền</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    @if (Session::has("Cart") != null)
        @foreach (Session::get('Cart')->products as $item)
            <tr>
                <td>
                    <div class="media">
                        <div class="d-flex">
                            <img src="assets/img/categori/{{ $item['productInfo']->image }}" alt="" />
                        </div>
                        <div class="media-body">
                            <p>{{ $item['productInfo']->name }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <h5 id="cost">₫{{ number_format($item['productInfo']->cost) }}</h5>
                </td>
                <td>
                    <div class="product_count">
                        <span class="input-number-increment"><i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="{{ $item['quanty'] }}" min="0" max="10" id="change-quanty-{{ $item['productInfo']->id }}" onchange="getQuanty({{ $item['productInfo']->id }})">
                        <span class="input-number-decrement"><i class="ti-plus"></i></span>
                    </div>
                </td>
                <td>
                    <div id="totalPrice">
                        <h5>₫{{ number_format($item['price']) }}</h5>
                    </div>

                </td>
                <td>
                    <a href="javacript:" onclick="DeleteListItemCart({{ $item['productInfo']->id }})">
                        <span class="fas fa-trash"></span>
                    </a>
                </td>
            </tr>
        @endforeach

        <tr>
            <th>
                <h5>Tổng tiền phải thanh toán</h5>
            </th>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <h5>₫{{ number_format(Session::get('Cart')->totalPrice) }}</h5>
            </td>
        </tr>
        <tr class="shipping_area">
            <td></td>
            <td></td>
            <td>
                <h5>Shipping</h5>
            </td>
            <td>
                <div class="shipping_box">
                    <ul class="list">
                        <li>
                            Flat Rate: $5.00
                            <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li>
                            Free Shipping
                            <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li>
                            Flat Rate: $10.00
                            <input type="radio" aria-label="Radio button for following text input">
                        </li>
                        <li class="active">
                            Local Delivery: $2.00
                            <input type="radio" aria-label="Radio button for following text input">
                        </li>
                    </ul>
                    <h6>
                        Calculate Shipping
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                        <option value="1">Bangladesh</option>
                        <option value="2">India</option>
                        <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                        <option value="1">Select a State</option>
                        <option value="2">Select a State</option>
                        <option value="4">Select a State</option>
                    </select>
                    <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a>
                </div>
            </td>
            <td></td>
        </tr>
    @endif
</tbody>
