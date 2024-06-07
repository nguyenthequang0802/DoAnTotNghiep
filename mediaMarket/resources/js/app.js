import './bootstrap';
import 'flowbite';
import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: 'textarea#post',
        height:600,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
            'media', 'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        menu: {
            favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: false,
        file_picker_callback (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

            tinymce.activeEditor.windowManager.openUrl({
                url : '/file-manager/tinymce5',
                title : 'Laravel File manager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    let url = message.content;
                    url = url.replace(/^.*\/\/[^\/]+/, ''); // remove domain
                    message.content = url
                    callback(message.content, { text: message.text })
                },

            })}
    });
    tinymce.init({
        selector: 'textarea#post_description',
        height:300,
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'link image | ' +
            'forecolor backcolor emoticons | help',
        content_css: false,
        menu: false,
        menubar: false,
    });
    tinymce.init({
        selector: 'textarea#post_seo_description',
        height:300,
        toolbar: 'undo redo',
        content_css: false,
        menu: false,
        menubar: false,
    });


    tinymce.init({
        selector: 'textarea#table',
        plugins: ['table', 'link', 'autolink'],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | link ',
        menu: false,
        height: 500,
        menubar: false,
        init_instance_callback: function(editor){
            editor.setContent('<table border="1" cellpadding="10" style="width: 100%"><tr><th></th><th></th></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '<tr><td></td><td></td></tr>' +
                '</table>')
        },
        content_css: false
    });
});
