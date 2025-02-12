// amd/src/test.js
define('tiny_html_components/test', [], function() {
    return {
        /**
         * Called by Tiny when the editor initializes.
         *
         * @param {Object} editor - The editor instance.
         * @param {string} url - The base URL for the plugin (if needed).
         */
        init: function(editor, url) {
            // Define a command that inserts "Hello World" into the editor.
            editor.addCommand('mceInsertHelloWorld', function() {
                // This method inserts the specified text at the current cursor position.
                editor.insertContent('Hello World');
            });
            
            // Register a button in the editor toolbar.
            editor.ui.registry.addButton('test', {
                text: 'Hello', // Button text.
                tooltip: 'Insert Hello World', // Tooltip for the button.
                onAction: function() {
                    // When the button is clicked, execute the command.
                    editor.execCommand('mceInsertHelloWorld');
                }
            });
            
            // Optionally, register a menu item in a dropdown.
            editor.ui.registry.addMenuItem('test', {
                text: 'Insert Hello World',
                onAction: function() {
                    editor.execCommand('mceInsertHelloWorld');
                }
            });
        }
    };
});
