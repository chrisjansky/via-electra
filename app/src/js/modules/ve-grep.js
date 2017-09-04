module.exports = {
  parse: (function instance() {
    var grepObj = document.querySelectorAll('[data-grep]');

    for (var i = 0; i < grepObj.length; i++) {
      var str = grepObj[i].innerHTML;

      str = str.replace(/(\s|^)(a|i|k|o|s|u|v|z)(\s+)([^\p{Cc}\p{Cf}\p{zL}\p{Zp}]+)/gmi , '$1$2&nbsp;$4');
      grepObj[i].innerHTML = str;    
    }

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
