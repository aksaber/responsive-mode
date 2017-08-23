
new Vue({
	el:"#app",
	data:{
		productList:[],
		totalMoney:0,
		checkAll:false,
		modalShow:false,
		curProduct:""
	},
	filters:{
		formatMoney:function(value){
			return "￥" + value.toFixed(2);
		}
	},
	computed:{
		TotalPrice:function(){
			var totalPrice = 0;
			this.productList.forEach(function(value,index){
				if(value.checked){
				  totalPrice = value.productPrice * value.productQuantity + totalPrice;
			    }
			});
			return totalPrice;
		}
	},
	mounted:function(){
		this.$nextTick(function(){
			this.cartView();
		})
	},
	methods:{
		cartView:function(){
			var _this = this;
			this.$http.get("data/purData.json",{"id":123}).then(function(res){
				_this.productList = res.data.result.list;
				_this.totalMoney = res.data.result.totalMoney;
			});
		},
		countProduct:function(item,val){
			if(val==1){
				item.productQuantity++;
			}else{
				item.productQuantity--;
			}
			if(item.productQuantity < 1){ item.productQuantity = 1; }
		},
		check:function(item){
			item.checked = !item.checked;
		},
		checkAllfun:function(){
			this.checkAll = true;
			this.productList.forEach(function(value,index){
				value.checked = true;
			});
		},
		checkdelfun:function(){
			this.checkAll = false;
			this.productList.forEach(function(value,index){
				value.checked = false;
			});
		},
		del:function(){
			var index = this.productList.indexOf(this,this.curProduct);
			this.productList.splice(index,1);
			this.modalShow = false;
		}
	}
});