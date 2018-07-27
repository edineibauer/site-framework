<?php

$data['data'] = [];
$data['data'][] = [
    "id" => "header-container",
    "template" => "col",
    "text" => [
        "id" => "parallax",
        "template" => "parallax",
        "style" => "height: 400px;",
        "class" => "padding-128 align-center",
        "text" => [
            "id" => "header-h1",
            "template" => "h1",
            "class" => "color-text-white text-shadow"
        ]
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "color-white padding-large padding-64",
    "text" => [
        "id" => "sub-container",
        "template" => "container",
        "text" => [
            [
                "template" => "col",
                "class" => "s12 m8 align-right",
                "text" => [
                    [
                        "id" => "sub-header",
                        "template" => "h2",
                        "class" => "upper"
                    ],
                    [
                        "id" => "sub-tag",
                        "template" => "col",
                        "class" => "color-text-grey font-light"
                    ]
                ]
            ],
            [
                "template" => "col",
                "class" => "s12 m4",
                "text" => [
                    "id" => "sub-img",
                    "template" => "img",
                    "class" => "col"
                ]
            ]

        ]
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "color-grey-light padding-large padding-64",
    "text" => [
        "id" => "tec-container",
        "template" => "container",
        "text" => [
            [
                "template" => "col",
                "class" => "s12 m4",
                "text" => [
                    "id" => "tec-img",
                    "template" => "img",
                    "class" => "col"
                ]
            ],
            [
                "template" => "col",
                "class" => "s12 m8",
                "text" => [
                    [
                        "id" => "tec-header",
                        "template" => "h2",
                        "class" => "upper align-left"
                    ],
                    [
                        "id" => "tec-tag",
                        "template" => "col",
                        "class" => "color-text-grey font-light"
                    ]
                ]
            ]

        ]
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "color-white padding-large padding-64",
    "text" => [
        "id" => "mvc-container",
        "template" => "container",
        "text" => [
            [
                "template" => "col",
                "class" => "s12 m8 align-right",
                "text" => [
                    [
                        "id" => "mvc-header",
                        "template" => "h2",
                        "class" => "upper"
                    ],
                    [
                        "id" => "mvc-tag",
                        "template" => "col",
                        "class" => "color-text-grey font-light"
                    ]
                ]
            ],
            [
                "template" => "col",
                "class" => "s12 m4",
                "text" => [
                    "id" => "mvc-img",
                    "template" => "img",
                    "class" => "col padding-large"
                ]
            ]

        ]
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "padding-16 color-grey-light",
    "text" => [
        "id" => "footer-msg",
        "template" => "container_large",
        "class" => "s12 m4 align-center font-light"
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "color-grey-dark inset-shadow padding-large padding-64",
    "text" => [
        "id" => "footer-container",
        "template" => "container_large",
        "text" => [
            [
                "template" => "col",
                "class" => "s12 m6",
                "text" => [
                    [
                        "template" => "col",
                        "class" => "s6 m4 padding-large",
                        "text" => [
                            "id" => "footer-img",
                            "template" => "img",
                            "class" => "col radius-circle z-depth-4",
                            "style" => "width: 100%"
                        ]
                    ],
                    [
                        "template" => "col",
                        "class" => "s6 m8",
                        "text" => [
                            [
                                "id" => "footer-img-title",
                                "template" => "h3",
                                "class" => "col padding-medium upper"
                            ],
                            [
                                "id" => "footer-img-tag",
                                "template" => "col",
                                "class" => "col padding-medium font-light",
                                "style" => "text-align: justify"
                            ]
                        ]
                    ]
                ]
            ],
            [
                "template" => "col",
                "class" => "s6 m3 align-right",
                "text" => [
                    [
                        "id" => "footer-header",
                        "template" => "h2",
                        "class" => "upper"
                    ],
                    [
                        "id" => "footer-tag",
                        "template" => "col",
                        "class" => "color-text-grey font-light"
                    ]
                ]
            ]

        ]
    ]
];

$data['data'][] = [
    "template" => "col",
    "class" => "padding-16 color-black",
    "text" => [
        "template" => "container_large",
        "text" => [
            [
                "id" => "footer-1",
                "template" => "col",
                "class" => "s12 m4",
            ],
            [
                "id" => "footer-2",
                "template" => "col",
                "class" => "s12 m4 align-center",
            ],
            [
                "id" => "footer-3",
                "template" => "col",
                "class" => "s12 m4 align-right",
            ]
        ]
    ]
];