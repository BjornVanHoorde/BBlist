/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("var menu = document.getElementById('menu');\nvar menuBtn = document.getElementById('menu-btn');\nvar closeMenuBtn = document.getElementById('close-menu-button');\nvar outsideMenu = document.getElementById('outside-menu');\nvar addToList = document.getElementById('add-to-list');\nvar cancelChoice = document.getElementById('cancel-choice');\nvar listChoices = document.getElementById('list-choices');\nmenuBtn.addEventListener('click', function () {\n  menu.className = '';\n  outsideMenu.className = '';\n});\ncloseMenuBtn.addEventListener('click', function () {\n  menu.className = 'hide';\n  outsideMenu.className = 'hide';\n});\noutsideMenu.addEventListener('click', function () {\n  menu.className = 'hide';\n  outsideMenu.className = 'hide';\n});\naddToList.addEventListener('click', function () {\n  listChoices.className = '';\n});\ncancelChoice.addEventListener('click', function () {\n  listChoices.className = 'hide';\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJtZW51IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm1lbnVCdG4iLCJjbG9zZU1lbnVCdG4iLCJvdXRzaWRlTWVudSIsImFkZFRvTGlzdCIsImNhbmNlbENob2ljZSIsImxpc3RDaG9pY2VzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImNsYXNzTmFtZSJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzP2NlZDYiXSwic291cmNlc0NvbnRlbnQiOlsiXG5cbmNvbnN0IG1lbnUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWVudScpO1xuY29uc3QgbWVudUJ0biA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZW51LWJ0bicpO1xuY29uc3QgY2xvc2VNZW51QnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Nsb3NlLW1lbnUtYnV0dG9uJyk7XG5jb25zdCBvdXRzaWRlTWVudSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdvdXRzaWRlLW1lbnUnKTtcbmNvbnN0IGFkZFRvTGlzdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdhZGQtdG8tbGlzdCcpO1xuY29uc3QgY2FuY2VsQ2hvaWNlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NhbmNlbC1jaG9pY2UnKTtcbmNvbnN0IGxpc3RDaG9pY2VzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xpc3QtY2hvaWNlcycpO1xuXG5tZW51QnRuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG4gICAgbWVudS5jbGFzc05hbWUgPSAnJztcbiAgICBvdXRzaWRlTWVudS5jbGFzc05hbWUgPSAnJztcbn0pO1xuXG5jbG9zZU1lbnVCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICBtZW51LmNsYXNzTmFtZSA9ICdoaWRlJztcbiAgICBvdXRzaWRlTWVudS5jbGFzc05hbWUgPSAnaGlkZSc7XG59KTtcblxub3V0c2lkZU1lbnUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICBtZW51LmNsYXNzTmFtZSA9ICdoaWRlJztcbiAgICBvdXRzaWRlTWVudS5jbGFzc05hbWUgPSAnaGlkZSc7XG59KTtcblxuYWRkVG9MaXN0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG4gICAgbGlzdENob2ljZXMuY2xhc3NOYW1lID0gJyc7XG59KTtcblxuY2FuY2VsQ2hvaWNlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG4gICAgbGlzdENob2ljZXMuY2xhc3NOYW1lID0gJ2hpZGUnO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUVBLElBQU1BLElBQUksR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLE1BQXhCLENBQWI7QUFDQSxJQUFNQyxPQUFPLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixVQUF4QixDQUFoQjtBQUNBLElBQU1FLFlBQVksR0FBR0gsUUFBUSxDQUFDQyxjQUFULENBQXdCLG1CQUF4QixDQUFyQjtBQUNBLElBQU1HLFdBQVcsR0FBR0osUUFBUSxDQUFDQyxjQUFULENBQXdCLGNBQXhCLENBQXBCO0FBQ0EsSUFBTUksU0FBUyxHQUFHTCxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsYUFBeEIsQ0FBbEI7QUFDQSxJQUFNSyxZQUFZLEdBQUdOLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixlQUF4QixDQUFyQjtBQUNBLElBQU1NLFdBQVcsR0FBR1AsUUFBUSxDQUFDQyxjQUFULENBQXdCLGNBQXhCLENBQXBCO0FBRUFDLE9BQU8sQ0FBQ00sZ0JBQVIsQ0FBeUIsT0FBekIsRUFBa0MsWUFBVztFQUN6Q1QsSUFBSSxDQUFDVSxTQUFMLEdBQWlCLEVBQWpCO0VBQ0FMLFdBQVcsQ0FBQ0ssU0FBWixHQUF3QixFQUF4QjtBQUNILENBSEQ7QUFLQU4sWUFBWSxDQUFDSyxnQkFBYixDQUE4QixPQUE5QixFQUF1QyxZQUFXO0VBQzlDVCxJQUFJLENBQUNVLFNBQUwsR0FBaUIsTUFBakI7RUFDQUwsV0FBVyxDQUFDSyxTQUFaLEdBQXdCLE1BQXhCO0FBQ0gsQ0FIRDtBQUtBTCxXQUFXLENBQUNJLGdCQUFaLENBQTZCLE9BQTdCLEVBQXNDLFlBQVc7RUFDN0NULElBQUksQ0FBQ1UsU0FBTCxHQUFpQixNQUFqQjtFQUNBTCxXQUFXLENBQUNLLFNBQVosR0FBd0IsTUFBeEI7QUFDSCxDQUhEO0FBS0FKLFNBQVMsQ0FBQ0csZ0JBQVYsQ0FBMkIsT0FBM0IsRUFBb0MsWUFBVztFQUMzQ0QsV0FBVyxDQUFDRSxTQUFaLEdBQXdCLEVBQXhCO0FBQ0gsQ0FGRDtBQUlBSCxZQUFZLENBQUNFLGdCQUFiLENBQThCLE9BQTlCLEVBQXVDLFlBQVc7RUFDOUNELFdBQVcsQ0FBQ0UsU0FBWixHQUF3QixNQUF4QjtBQUNILENBRkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/main.scss":
/*!**********************************!*\
  !*** ./resources/sass/main.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9tYWluLnNjc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3Nhc3MvbWFpbi5zY3NzP2U4ZjUiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/main.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;