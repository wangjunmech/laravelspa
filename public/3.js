(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      subData: "testdata222"
    };
  },
  inject: {
    theme: {
      //函数式组件取值不一样
      "default": function _default() {
        return {};
      }
    },
    testdata: {
      "default": function _default() {
        return {};
      }
    }
  },
  mounted: function mounted() {// console.log(this.testdata)
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true& ***!
  \********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function(_h, _vm) {
  var _c = _vm._c
  return _c("div", { staticClass: "border2" }, [
    _c("h3", { style: { color: _vm.injections.theme.color } }, [
      _vm._v("组件childCom4.vue")
    ]),
    _vm._v(" "),
    _c("h3", {
      domProps: {
        textContent: _vm._s({ testdata: _vm.injections.testdata.test1 })
      }
    }),
    _vm._v(" "),
    _c("h3", {
      domProps: {
        textContent: _vm._s({ testdata: _vm.injections.testdata.test2 })
      }
    }),
    _vm._v(" "),
    _c("h3", [_vm._v(_vm._s(_vm.subData))]),
    _vm._v(" "),
    _c("h3", [_vm._v("DARA3")]),
    _vm._v(" "),
    _c("h3", {
      domProps: { textContent: _vm._s(_vm.injections.testdata.test1) }
    }),
    _vm._v(" "),
    _c("h3", {
      domProps: { textContent: _vm._s(_vm.injections.testdata.test2) }
    }),
    _vm._v(" "),
    _c("h3", {
      domProps: { textContent: _vm._s(_vm.injections.testdata.test3) }
    }),
    _vm._v(" "),
    _vm._m(0)
  ])
}
var staticRenderFns = [
  function(_h, _vm) {
    var _c = _vm._c
    return _c("div", { staticClass: "alert alert-danger" }, [
      _c("p", [
        _vm._v(
          "子组的样式可以父组件中声明，父组件的scoped声明不影响子组件中使用父组件的样式类"
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/components/sub/childCom4.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/sub/childCom4.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./childCom4.vue?vue&type=template&id=7cb838c5&functional=true& */ "./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true&");
/* harmony import */ var _childCom4_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./childCom4.vue?vue&type=script&lang=js& */ "./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _childCom4_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  true,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/sub/childCom4.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_childCom4_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./childCom4.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/sub/childCom4.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_childCom4_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./childCom4.vue?vue&type=template&id=7cb838c5&functional=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/sub/childCom4.vue?vue&type=template&id=7cb838c5&functional=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_childCom4_vue_vue_type_template_id_7cb838c5_functional_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);