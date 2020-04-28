exports.install = function (Vue, options) {
    Vue.prototype.testCustFun = function (info){
       console.log('testCustFun..........'+info)
    };
};