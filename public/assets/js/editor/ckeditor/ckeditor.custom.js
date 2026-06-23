
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".editor").forEach((editorElement) => {
      CKEDITOR.replace(editorElement, {
        on: {
          contentDom: function (evt) {
            // Allow custom context menu only with table elements.
            evt.editor.editable().on(
              "contextmenu",
              function (contextEvent) {
                var path = evt.editor.elementPath();
                if (!path.contains("table")) {
                  contextEvent.cancel();
                }
              },
              null,
              null,
              5
            );
          },
        },
      });
    });
  });

