<?php

namespace App\Helpers;

class HelperComponent
{

    public static function SideBar()
    {
        return [
            [
                "heading" => "Menu",
            ],
            [
                "single_link" => setSingleLink("dashboard", "home", "dashboard-view", "/"),
            ],
            [
                "heading" => "Management",

            ],

            [

                "menu" => [
                    "title" => 'User Management',
                    'can'=>'user-management-dropdown',
                    "icon" => "user",
                    "sub_menu" => [
                        setSubMenu(
                            "Users",
                            null,
                            "users-view",
                            "/users",
                        ),
                        setSubMenu(
                            "Roles",
                            null,
                            "roles-view",
                            "/roles",
                        ),
                        setSubMenu(
                            "Permissions",
                            null,
                            "permissions-view",
                            "/permissions",
                        ),

                    ]

                ],

            ],

            [
                "heading" => "Apps",
            ],




            [
                "single_link" => setSingleLink("Services", "layers", "services-view", "/services"),
            ],
            [
                "single_link" => setSingleLink("Listing", "link", "listing-view", "/listing"),
            ],
            [
                "heading" => "Tool",
            ],
            [

                "menu" => [
                    "title" => 'Settings',
                    'can'=>'settings-view',
                    "icon" => "settings",
                    "sub_menu" => [
                        setSubMenu(
                            "Profile",
                            null,
                            "profile-view",
                            "/profile",
                        ),
                        setSubMenu(
                            "Lock Screen",
                            null,
                            "lockscreen-view",
                            "/lock-screen",
                        ),



                    ]

                ],

            ],

            [
                "heading" => "Session",
            ],
            [
                "single_link" => setSingleLink("Log out", "log-out", "logout-view", "/logout"),
            ],


        ];
    }
}
