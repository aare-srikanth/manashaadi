CKEDITOR_CONFIGS = {
    'default': {
        'skin': 'bootstrapck',
        'toolbar': 'Custom',
        'toolbar_Custom': [
            {'name': 'basicstyles', 'items': ['Bold', 'Italic', 'Underline', '-', 'RemoveFormat']},
            {'name': 'paragraph', 'items': ['NumberedList', 'BulletedList']},
            {'name': 'indent', 'items': ['Indent', 'Outdent']},
            {'name': 'codeSnippet', 'items': ['CodeSnippet',]}
        ],
        'codeSnippet_theme': 'school_book',
        'tabSpaces' : 4,
        'extraPlugins': ','.join(
            [
            'codesnippet',
            'widget',
            'dialog',
            ]),
    }
}