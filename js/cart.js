
new Vue({
	el:"#app",
	data:{
		productList:[],
		totalMoney:0,
		checkAll:false,
		delFlag:false,
		curProduct:""
	},
	filters:{
		formatMoney:function(value){
			return "￥" + value.toFixed(2);
		}
	},
	mounted:function(){
		this.$nextTick(function(){
	      this.cartView();
		})
	},
	computed:{
	  countTotalPrice:function(){
		var totalPrice = 0;
		this.productList.forEach(function(value,item){
			if(value.checked){
				totalPrice += value.productPrice * value.productQuantity;
			}
		})
		return totalPrice;
	  }
    },
	methods:{
		cartView:function(){
			var _this = this;
			this.$http.get("data/cartData.json",{"id":123}).then(function(res){
				_this.productList = res.data.result.list; 
				_this.totalMoney = res.data.result.totalMoney; 
			});
		},
		changeMoney:function(product,index){
			if(index>0){
				product.productQuantity++;
			}else{
				product.productQuantity--;
			    if(product.productQuantity < 1)
				  product.productQuantity = 1;
			}
		},
		check:function(product){
		  	product.checked = !product.checked;
		},
		checkAllfun:function(){
		    this.checkAll = true;	
			this.productList.forEach(function(value,index){
				value.checked = true;
			}); 	
		},
		decheckAllfun:function(){
			this.checkAll = false;
			this.productList.forEach(function(value,index){
			  value.checked = false;
		    })
		},
		delProduct:function(){
			var index = this.productList.indexOf(this.curProduct);
			this.productList.splice(index,1);
			this.delFlag = false;
		},
		delConfirm:function(product){
			this.delFlag = true;
			this.curProduct = product;
		}
	}
})



