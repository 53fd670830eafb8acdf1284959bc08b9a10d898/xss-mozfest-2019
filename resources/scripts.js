// Regex
var regex_lt = new RegExp('&lt;', 'g');
var regex_gt = new RegExp('&gt;', 'g');

function make_unsafe(code) {
    // Replace angle brackets
    code = code.replace(regex_lt, '<');
    code = code.replace(regex_gt, '>');
    // Return unsafe code
    return code;
}

function copy_code(src) {
    // Get Code
    var code = src.innerHTML.trim();
    console.log(code);
    // Make unsafe
    var xss_code = make_unsafe(code);
    console.log(xss_code);
    // Copy
    document.getElementById('code').value = xss_code;
}