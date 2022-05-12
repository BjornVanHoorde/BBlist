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

eval("var menu = document.getElementById('menu');\nvar menuBtn = document.getElementById('menu-btn');\nvar closeMenuBtn = document.getElementById('close-menu-button');\nvar outsideMenu = document.getElementById('outside-menu');\nvar addToList = document.getElementById('add-to-list');\nvar cancelChoice = document.getElementById('cancel-choice');\nvar listChoices = document.getElementById('list-choices');\nmenuBtn.addEventListener('click', function () {\n  menu.className = '';\n  outsideMenu.className = '';\n});\ncloseMenuBtn.addEventListener('click', function () {\n  menu.className = 'hide';\n  outsideMenu.className = 'hide';\n});\noutsideMenu.addEventListener('click', function () {\n  menu.className = 'hide';\n  outsideMenu.className = 'hide';\n});\naddToList.addEventListener('click', function () {\n  listChoices.className = '';\n});\ncancelChoice.addEventListener('click', function () {\n  listChoices.className = 'hide';\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibmFtZXMiOlsibWVudSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJtZW51QnRuIiwiY2xvc2VNZW51QnRuIiwib3V0c2lkZU1lbnUiLCJhZGRUb0xpc3QiLCJjYW5jZWxDaG9pY2UiLCJsaXN0Q2hvaWNlcyIsImFkZEV2ZW50TGlzdGVuZXIiLCJjbGFzc05hbWUiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyJcblxuY29uc3QgbWVudSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZW51Jyk7XG5jb25zdCBtZW51QnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21lbnUtYnRuJyk7XG5jb25zdCBjbG9zZU1lbnVCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2xvc2UtbWVudS1idXR0b24nKTtcbmNvbnN0IG91dHNpZGVNZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ291dHNpZGUtbWVudScpO1xuY29uc3QgYWRkVG9MaXN0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC10by1saXN0Jyk7XG5jb25zdCBjYW5jZWxDaG9pY2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2FuY2VsLWNob2ljZScpO1xuY29uc3QgbGlzdENob2ljZXMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGlzdC1jaG9pY2VzJyk7XG5cbm1lbnVCdG4uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICBtZW51LmNsYXNzTmFtZSA9ICcnO1xuICAgIG91dHNpZGVNZW51LmNsYXNzTmFtZSA9ICcnO1xufSk7XG5cbmNsb3NlTWVudUJ0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgIG1lbnUuY2xhc3NOYW1lID0gJ2hpZGUnO1xuICAgIG91dHNpZGVNZW51LmNsYXNzTmFtZSA9ICdoaWRlJztcbn0pO1xuXG5vdXRzaWRlTWVudS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgIG1lbnUuY2xhc3NOYW1lID0gJ2hpZGUnO1xuICAgIG91dHNpZGVNZW51LmNsYXNzTmFtZSA9ICdoaWRlJztcbn0pO1xuXG5hZGRUb0xpc3QuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICBsaXN0Q2hvaWNlcy5jbGFzc05hbWUgPSAnJztcbn0pO1xuXG5jYW5jZWxDaG9pY2UuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICBsaXN0Q2hvaWNlcy5jbGFzc05hbWUgPSAnaGlkZSc7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBRUEsSUFBTUEsSUFBSSxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsTUFBeEIsQ0FBYjtBQUNBLElBQU1DLE9BQU8sR0FBR0YsUUFBUSxDQUFDQyxjQUFULENBQXdCLFVBQXhCLENBQWhCO0FBQ0EsSUFBTUUsWUFBWSxHQUFHSCxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsbUJBQXhCLENBQXJCO0FBQ0EsSUFBTUcsV0FBVyxHQUFHSixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsY0FBeEIsQ0FBcEI7QUFDQSxJQUFNSSxTQUFTLEdBQUdMLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixhQUF4QixDQUFsQjtBQUNBLElBQU1LLFlBQVksR0FBR04sUUFBUSxDQUFDQyxjQUFULENBQXdCLGVBQXhCLENBQXJCO0FBQ0EsSUFBTU0sV0FBVyxHQUFHUCxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsY0FBeEIsQ0FBcEI7QUFFQUMsT0FBTyxDQUFDTSxnQkFBUixDQUF5QixPQUF6QixFQUFrQyxZQUFXO0VBQ3pDVCxJQUFJLENBQUNVLFNBQUwsR0FBaUIsRUFBakI7RUFDQUwsV0FBVyxDQUFDSyxTQUFaLEdBQXdCLEVBQXhCO0FBQ0gsQ0FIRDtBQUtBTixZQUFZLENBQUNLLGdCQUFiLENBQThCLE9BQTlCLEVBQXVDLFlBQVc7RUFDOUNULElBQUksQ0FBQ1UsU0FBTCxHQUFpQixNQUFqQjtFQUNBTCxXQUFXLENBQUNLLFNBQVosR0FBd0IsTUFBeEI7QUFDSCxDQUhEO0FBS0FMLFdBQVcsQ0FBQ0ksZ0JBQVosQ0FBNkIsT0FBN0IsRUFBc0MsWUFBVztFQUM3Q1QsSUFBSSxDQUFDVSxTQUFMLEdBQWlCLE1BQWpCO0VBQ0FMLFdBQVcsQ0FBQ0ssU0FBWixHQUF3QixNQUF4QjtBQUNILENBSEQ7QUFLQUosU0FBUyxDQUFDRyxnQkFBVixDQUEyQixPQUEzQixFQUFvQyxZQUFXO0VBQzNDRCxXQUFXLENBQUNFLFNBQVosR0FBd0IsRUFBeEI7QUFDSCxDQUZEO0FBSUFILFlBQVksQ0FBQ0UsZ0JBQWIsQ0FBOEIsT0FBOUIsRUFBdUMsWUFBVztFQUM5Q0QsV0FBVyxDQUFDRSxTQUFaLEdBQXdCLE1BQXhCO0FBQ0gsQ0FGRCJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

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