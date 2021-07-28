<?php ?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的購物車</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link rel="stylesheet" href="stytle.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="item_header">
                <div class="item_detail">商品名稱</div>
                <div class="price">單價</div>
                <div class="count">數量</div>
                <div class="amount">總計</div>
                <div class="edit">編輯</div>
            </div>
            <div class="item_container" v-for="(item, index) in itemList" :key="item.id">
                <div class="item_header item_body">
                    <div class="item_detail">
                        <img v-bind:src="item.imgUrl" alt="">
                        <div class="name">{{item.itemName}}</div>
                    </div>

                    <div class="price"><span>$</span>{{item.price}}</div>
                    <div class="count">
                        <button @click="handleSub(item)">-</button> {{item.count}}
                        <button @click="handlePlus(item)">+</button>
                    </div>
                    <div class="amount">{{item.price * item.count}}</div>
                    <div class="edit">
                        <button @click="handledelete(index)">移除</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
<script src="main.js"></script>

</html>