<!DOCTYPE html>
    
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>panier</title>
  <style>
    @charset "utf-8";

     
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600);

html,
html a {
  -webkit-font-smoothing: antialiased;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

body {
  background-color: #fff;
  color: #000000;
  font-family: 'Open Sans', sans-serif;
  font-size: 62.5%;
  margin: 0 auto;
}

a {
  border: 0 none;
  outline: 0;
  text-decoration: none;
}

strong {
  font-weight: bold;
}

p {
  margin: 0.75rem 0 0;
}

h1 {
  font-size: 0.75rem;
  font-weight: normal;
  margin: 0;
  padding: 0;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 5%;
}
.containerr {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10%;
margin-top: 5px;

}

input,
button {
  border: 0 none;
  outline: 0 none;
}

button {
 /* يوسط الزر على المستوى الأفقي */
  width: 200px; /* تحديد عرض الزر */
  height: 50px; /* تحديد ارتفاع الزر */
  text-align: center; /* يوسط النص داخل الزر على المستوى الأفقي */
  /* يوسط النص داخل الزر على المستوى الرأسي */
  background-color: #28c743; /* لون خلفية الزر */
  color: #000000; /* لون النص في الزر */
  font-size: 20px; /* حجم الخط في الزر */
}

button:hover,
button:focus {
  background-color: #2d1dc4;

}

img,
.basket-module,
.basket-labels,
.basket-product {
  width: 100%;
}

input,
button,
.basket,
.basket-module,
.basket-labels,
.item,
.price,
.quantity,
.subtotal,
.basket-product,
.product-image,
.product-details {
  float: left;
}

.price:before,
.subtotal:before,
.subtotal-value:before,
.total-value:before,
.promo-value:before {
  content: '£';
}

.hide {
  display: none;
}

main {
  clear: both;
  font-size: 0.75rem;
  margin: 0 auto;
  overflow: hidden;
  padding: 1rem 0;
  width: 960px;
}

.basket,
aside {
  padding: 0 1rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket {
  width: 70%;
}

.basket-module {
  color: #111;
}

label {
  display: block;
  margin-bottom: 0.3125rem;
}





.basket-labels {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  margin-top: 1.625rem;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  color: #111;
  display: inline-block;
  padding: 0.625rem 0;
}

li.price:before,
li.subtotal:before {
  content: '';
}

.item {
  width: 55%;
}

.price,
.quantity,
.subtotal {
  width: 15%;
}

.subtotal {
  text-align: right;
}

.remove {
  bottom: 1.125rem;
  float: right;
  position: absolute;
  right: 0;
  text-align: right;
  width: 45%;
}

.remove button {
  background-color: transparent;
  color: #777;
  float: none;
  text-decoration: underline;
  text-transform: uppercase;
}

.item-heading {
  padding-left: 4.375rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.basket-product {
  border-bottom: 1px solid #ccc;
  padding: 1rem 0;
  position: relative;
}

.product-image {
  width: 35%;
}

.product-details {
  width: 65%;
}

.product-frame {
  border: 1px solid #115f15;
}

.product-details {
  padding: 0 1.5rem;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.quantity-field {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  font-size: 0.625rem;
  padding: 2px;
  width: 3.75rem;
}

aside {
  float: right;
  position: relative;
  width: 30%;
}

.summary {
  background-color: #eee;
  border: 1px solid #aaa;
  padding: 1rem;
  position: fixed;
  width: 250px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.summary-total-items {
  color: #666;
  font-size: 0.875rem;
  text-align: center;
}

.summary-subtotal,
.summary-total {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  clear: both;
  margin: 1rem 0;
  overflow: hidden;
  padding: 0.5rem 0;
}

.subtotal-title,
.subtotal-value,
.total-title,
.total-value,
.promo-title,
.promo-value {
  color: #111;
  float: left;
  width: 50%;
}





.summary-delivery {
  padding-bottom: 3rem;
}

.subtotal-value,
.total-value {
  text-align: right;
}

.total-title {
  font-weight: bold;
  text-transform: uppercase;
}

.summary-checkout {
  display: block;
}

.checkout-cta {
  display: block;
  float: none;
  font-size: 0.75rem;
  text-align: center;
  text-transform: uppercase;
  padding: 0.625rem 0;
  width: 100%;
}

.summary-delivery-selection {
  background-color: #ccc;
  border: 1px solid #aaa;
  border-radius: 4px;
  display: block;
  font-size: 0.625rem;
  height: 34px;
  width: 100%;
}

@media screen and (max-width: 640px) {
  aside,
  .basket,
  .summary,
  .item,
  .remove {
    width: 100%;
  }
  .basket-labels {
    display: none;
  }
  .basket-module {
    margin-bottom: 1rem;
  }
  .item {
    margin-bottom: 1rem;
  }
  .product-image {
    width: 40%;
  }
  .product-details {
    width: 60%;
  }
  .price,
  .subtotal {
    width: 33%;
  }
  .quantity {
    text-align: center;
    width: 34%;
  }
  .quantity-field {
    float: none;
  }
  .remove {
    bottom: 0;
    text-align: left;
    margin-top: 0.75rem;
    position: relative;
  }
  .remove button {
    padding: 0;
  }
  .summary {
    margin-top: 1.25rem;
    position: relative;
  }
}

@media screen and (min-width: 641px) and (max-width: 960px) {
  aside {
    padding: 0 1rem 0 0;
  }
  .summary {
    width: 28%;
  }
}

@media screen and (max-width: 960px) {
  main {
    width: 100%;
  }
  .product-details {
    padding: 0 1rem;
  }
}

        







    </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-12">
    <div class="dropdown">
<div class="dropdown-menu">
    <div class="row total-header-section">
      @php $total=0 @endphp
      @foreach ((array) session('cart') as $id=>$details)
      @php $total+=$details['prix']@endphp    
      @endforeach
     
    </div>
    @if (session('cart'))
    @foreach (session('cart') as $id=>$details)
    <div class="basket-labels">
      <ul>
        <li class="item item-heading">المنتج</li>
        <li class="price">الكمية</li>
        <li class="quantity">السعر</li>
  

      </ul>
    </div>

















    <div class="basket-product">
      <div class="item">
        <div class="product-image">
          <img src="{{$details['photo']}}" alt="Placholder Image 2" class="product-frame" />
        </div>
        <div class="product-details">
          <h1><strong><span class="item-quantity">1</span> </strong> {{$details['name']}}</h1>

        </div>
      </div>
      <span class="pric texte-info">دج{{$details['prix']}}</span>
      <div class="quantity">
        <input type="number" value="1" max="1" class="quantity-field">
      </div>

      <div class="remove">
        <button>ازالة</button>
        
      </div>
    </div>
   



    
    @endforeach
    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
      <p>المجموع  <span class="text-info"> {{$total}}دج</span></p>
    </div>
        
    @endif
   
</div>
  </div>
</div>
</div>

</div>

<form  action="{{url('user/pay')}}" method="POST">
  @csrf

  <input type="hidden" name="amount" value="200">
  <div class="container">
  <button  type="submit" class="btn" > دفع الكتروني</button>
</div>

 


 
</form>
<div class="containerr">
 <a href="{{url('user/yad')}}"> <button   type="submit" class="btn" > دفع يد بيد</button></a>
  </div>
   
</div>

</body>
</html>


