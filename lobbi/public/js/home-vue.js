var why_lobbi = new Vue({
    el: '#why_lobbi',
    data: {
        left_items: [{
                title: 'RELIABLE MESSAGING',
                description: "Quis autem vel eum iure reprehendrit qui in ea voluptate velit esse quam nihil molestiae vel",
                icon: "images/Group-2.png",
            },
            {
                title: 'MOMENTS',
                description: "This is short description to explain the features of sharing moments through Lobbi App voluptaten velit esse",
                icon: "images/Group 261.png",
            },
            {
                title: 'SECURE E-WALLET',
                description: "This is short description to explain the features of e-wallet eg easy, secure or instant voluptate velit esse",
                icon: "images/wallet.png",
            }
        ],
        right_items: [{
            title: 'COMMUNICATIONS',
            description: "Quis autem vel eum iure reprehendrit qui in ea voluptate velit esse quam nihil<br> molestiae vel",
            icon: "images/Ellipse 2.png",
        }, {
            title: 'BUSINESS ACCOUNT',
            description: "Quis autem vel eum iure reprehendrit qui in ea voluptate velit esse quam nihil molestiae vel",
            icon: "images/Group-1.png",
        }, {
            title: 'CONVENIENT',
            description: "Quis autem vel eum iure reprehendrit qui in ea voluptate velit esse quam nihil molestiae vel",
            icon: "images/Ellipse 2.png",
        }]
    }
})

var review = new Vue({
    el: '#review',
    data: {
        reviews: [{
                profile_pic: 'images/Ellipse.png',
                comment: 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae vel',
                name: 'Setephanie Elise ',
                status: 'App User',
            },
            {
                profile_pic: 'images/Ellipse.png',
                comment: 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae vel',
                name: 'Setephanie Elise ',
                status: 'App User',
            },
            {
                profile_pic: 'images/Ellipse.png',
                comment: 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae vel. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse nihil molestiae vel',
                name: 'Setephanie Elise ',
                status: 'App User',
            }
        ]
    }
})

var faq = new Vue({
    el: '#faq',
    data: {
        faqs: [{
                question: 'What is Lobbi?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            },
            {
                question: 'How do I sign up for Lobbi?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            }, {
                question: 'What make Lobbi different from others app?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            }, {
                question: 'What I can do with Lobbi e-wallet?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            }, {
                question: 'How do I sign up for Lobbi?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            }, {
                question: 'How do I sign up for Lobbi?',
                answer: 'Quis autem vel eum iure reprehenderit qui un ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem eum fugiat quo'
            },
        ]
    }
})

var follow_our_news = new Vue({
    el: '#follow_our_news',
    data: {
        news: [{
                image: 'images/blank_image.svg',
                title: 'Special title treatment',
                text: `Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.`,
                day: "2",
                link: "#",
            },
            {
                image: 'images/blank_image.svg',
                title: 'Special title treatment',
                text: `Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.`,
                day: "2",
                link: "#",
            }, {
                image: 'images/blank_image.svg',
                title: 'Special title treatment',
                text: `Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.`,
                day: "2",
                link: "#",
            },
        ]
    }
})
