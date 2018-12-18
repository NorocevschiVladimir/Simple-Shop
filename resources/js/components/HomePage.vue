<template>

</template>

<script>
    export default {
        name: "home-template",
        data(){
            return{
                products:[
                    {
                        id: 0,
                        name: 'Tshirt - 1',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '1product.jpg',
                        price: 100,
                    },
                    {
                        id: 1,
                        name: 'Tshirt - 2',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '2product.jpg',
                        price: 200,
                    },
                    {
                        id: 2,
                        name: 'Tshirt - 3',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '3product.jpg',
                        price: 300,
                    },
                    {
                        id: 3,
                        name: 'Tshirt - 4',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '19product.jpg',
                        price: 400,
                    },
                    {
                        id: 4,
                        name: 'Tshirt - 5',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '5product.jpg',
                        price: 500,
                    },
                    {
                        id: 5,
                        name: 'Tshirt - 6',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '6product.jpg',
                        price: 600,
                    },
                    {
                        id: 6,
                        name: 'Tshirt - 7',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '7product.jpg',
                        price: 700,
                    },
                    {
                        id: 7,
                        name: 'Tshirt - 8',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '8product.jpeg',
                        price: 800,
                    },
                    {
                        id: 8,
                        name: 'Tshirt - 9',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '9product.jpg',
                        price: 900,
                    },
                    {
                        id: 9,
                        name: 'Tshirt - 10',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '10product.jpg',
                        price: 1000,
                    },
                    {
                        id: 10,
                        name: 'Tshirt - 11',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '11product.jpg',
                        price: 1100,
                    },
                    {
                        id: 11,
                        name: 'Tshirt - 12',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '12product.jpg',
                        price: 1200,
                    },
                    {
                        id: 12,
                        name: 'Tshirt - 13',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '13product.jpeg',
                        price: 1300,
                    },
                    {
                        id: 13,
                        name: 'Tshirt - 14',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '14product.jpg',
                        price: 1400,
                    },
                    {
                        id: 14,
                        name: 'Tshirt - 15',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '15product.jpg',
                        price: 1500,
                    },
                    {
                        id: 15,
                        name: 'Tshirt - 16',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '16product.jpeg',
                        price: 1600,
                    },
                    {
                        id: 16,
                        name: 'Tshirt - 17',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '17product.jpg',
                        price: 1700,
                    },
                    {
                        id: 17,
                        name: 'Tshirt - 18',
                        description: 'Complex 3-layered sole designed after running, athletics and basketball sneakers archetypes. Embroidered size at the edge of the toe. Embossed logo in the back',
                        image: 'images/' + '18product.jpg',
                        price: 1800,
                    },
                ],
                modal_Product:[],
                cart_Products:[],
                price_Cart: 0,
                quantityCart: 0,
                cookie_Cart: [],
                errors: [
                    '','',''
                ],
            }
        },
        created() {
            let cookie = this.$cookie.get('cart');
            if (typeof cookie !== 'object'){
                let cookieArray = JSON.parse("[" + cookie + "]");
                for(let i=0;i<cookieArray.length;i++)
                {
                    this.quantityCart++;
                    this.cart_Products.push(this.products[cookieArray[i]]);
                    this.price_Cart= this.price_Cart + this.products[cookieArray[i]].price;
                    this.cookie_Cart.push(this.products[cookieArray[i]].id);
                }
            }
        },
        methods: {
            showProduct (product) {
                this.modal_Product = {
                    id: this.products[product].id,
                    name: this.products[product].name,
                    image: this.products[product].image,
                    description: this.products[product].description,
                    price: this.products[product].price,
                };
                this.$refs.modalProduct.show();
            },
            AddCart(product){
                this.quantityCart++;
                this.cart_Products.push(this.products[product]);
                this.price_Cart= this.price_Cart + this.products[product].price;
                this.cookie_Cart.push(this.products[product].id);
                this.$cookie.set('cart', this.cookie_Cart, 1);
            },
            buyProduct(){
                alert('Thank you for shopping with us');
            },
            showCart(){
                if(this.cart_Products.length){
                    this.$refs.cartModal.show()
                }
                else{
                    alert('No products in cart');
                }
            },
            clearVariables(){
                this.cart_Products = [];
                this.quantityCart = 0;
                this.price_Cart = 0;
                this.cookie_Cart = [];
                this.$cookie.delete('cart');
            },
            BuyAll(){
                alert('Thank you for your support');
                this.clearVariables();
                this.$refs.cartModal.hide();

            },
            hideModal (target) {
                this.$refs.target.hide();
            }
        },
        updated: function () {
            this.$nextTick(function () {
            });
        },
    }
</script>

<style scoped>

</style>
