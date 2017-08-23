new Vue({
	el:".container",
	data:{
		addressList:[],
		limitNum:3,
		nowIndex:0,
		ship:1
	},
	mounted:function(){
		this.$nextTick(function(){
			this.getAddressList();
		});
	},
    computed:{
		filterAddress:function(){
			return this.addressList.slice(0,this.limitNum);
		}
	},
	methods:{
		getAddressList:function(){
			var _this = this;
			this.$http.get("data/address.json").then(function(response){
				var res = response.data;
                if(res.status == "0"){
					_this.addressList = res.result;
				}				
			});
		},
		moreNum:function(){
			if(this.limitNum == 3){
				this.limitNum = this.addressList.length;
			}else{
				this.limitNum = 3;
			}
		},
		setDefault:function(addressId){
			this.addressList.forEach(function(address,index){
				if(address.addressId == addressId){
					address.isDefault = true;
				}else{
					address.isDefault = false;
				}
			});
		},
		delIcon:function(nIndex){
			var _this = this;
			this.addressList.forEach(function(address,index){
				if(nIndex==index){
					_this.addressList.splice(index,1);
				}
			});
		}
	}
})