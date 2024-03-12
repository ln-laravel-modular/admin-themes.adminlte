<?php

return [
    'name' => 'AdminLTE',
    'slug' => 'adminlte',
    "title" => "AdminLTE3",
    'prefix' => 'adminlte',
    "logo" => "/modules/adminlte/public/img/AdminLTELogo.png",
    "menu" => [
        ["path" => "", "title" => "Dashboard", "icon" => "fas fa-tachometer-alt", "slug" => "", "children" => [
            ["path" => "", "title" => "Dashboard v1", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/index2", "title" => "Dashboard v2", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/index3", "title" => "Dashboard v3", "icon" => "far fa-circle", "slug" => "", "children" => []],
        ]],
        ["path" => "/adminlte/widgets", "title" => "Widgets", "icon" => "fas fa-th", "slug" => "", "badge" => ["type" => "danger", "value" => "NEW"], "children" => []],
        ["path" => "/adminlte/layout", "title" => "Layout Options", "icon" => "fas fa-copy", "slug" => "", "badge" => ["value" => "6"], "children" => [
            ["path" => "/adminlte/layout/top-nav", "title" => "Top Navigation", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/top-nav-sidebar", "title" => "Top Navigation + Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/boxed", "title" => "Boxed", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/fixed-sidebar", "title" => "Fixed Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/fixed-sidebar-custom", "title" => "Fixed Sidebar <small>+ Custom Area</small>", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/fixed-topnav", "title" => "Fixed Navbar", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/fixed-footer", "title" => "Fixed Footer", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/layout/collapsed-sidebar", "title" => "Collapsed Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
        ]],
        ["path" => "/charts", "title" => "Charts", "icon" => "fas fa-chart-pie", "slug" => "", "children" => [
            ["path" => "/adminlte/charts/chartjs", "title" => "ChartJS", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/charts/flot", "title" => "Flot", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/charts/inline", "title" => "Inline", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/charts/uplot", "title" => "uPlot", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "/adminlte/ui", "title" => "UI Elements", "icon" => "fas fa-tree", "slug" => "", "children" => [
            ["path" => "/adminlte/ui/general", "title" => "General", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/icons", "title" => "Icons", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/buttons", "title" => "Buttons", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/sliders", "title" => "Sliders", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/modals", "title" => "Modals & Alerts", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/navbar", "title" => "Navbar & Tabs", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/timeline", "title" => "Timeline", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/ui/ribbons", "title" => "Ribbons", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "/adminlte/forms", "title" => "Forms", "icon" => "fas fa-edit", "slug" => "", "children" => [
            ["path" => "/adminlte/forms/general", "title" => "General Elements", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/forms/advanced", "title" => "Advanced Elements", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/forms/editors", "title" => "Editors", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/forms/validation", "title" => "Validation", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "/adminlte/tables", "title" => "Tables", "icon" => "fas fa-table", "slug" => "", "children" => [
            ["path" => "/adminlte/tables/simple", "title" => "Simple Tables", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/tables/data", "title" => "DataTables", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/tables/jsgrid", "title" => "jsGrid", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["title" => "EXAMPLES", "type" => "header"],
        ["path" => "/adminlte/calendar", "title" => "Calendar", "icon" => "far fa-calendar-alt", "slug" => "", "badge" => ["value" => "2"], "children" => []],
        ["path" => "/adminlte/gallery", "title" => "Gallery", "icon" => "far fa-image", "slug" => "", "children" => []],
        ["path" => "/adminlte/kanban", "title" => "Kanban Board", "icon" => "far fa-envelope", "slug" => "", "children" => []],
        ["path" => "/adminlte/mailbox", "title" => "Mailbox", "icon" => "far fa-envelope", "slug" => "", "children" => [
            ["path" => "/adminlte/mailbox/mainbox", "title" => "Inbox", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/mailbox/compose", "title" => "Compose", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/mailbox/read-mail", "title" => "Read", "icon" => "far fa-circle", "slug" => "", "children" => []],
        ]],
        ["path" => "/adminlte/examples", "title" => "Pages", "icon" => "fas fa-book", "slug" => "", "children" => [
            ["path" => "/adminlte/examples/invoice", "title" => "Invoice", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/profile", "title" => "Profile", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/e-commerce", "title" => "E-commerce", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/projects", "title" => "Projects", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/project-add", "title" => "Project Add", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/project-edit", "title" => "Project Edit", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/project-detail", "title" => "Project Detail", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/contacts", "title" => "Contacts", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/faq", "title" => "FAQ", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/contact-us", "title" => "Contact us", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "/adminlte/examples", "title" => "Extras", "icon" => "far fa-plus-square", "slug" => "", "children" => [
            ["path" => "", "title" => "Login & Register v1", "icon" => "far fa-circle", "slug" => "", "children" => [
                ["path" => "/adminlte/examples/login", "title" => "Login v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/register", "title" => "Register v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/forgot-password", "title" => "Forgot Password v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/recover-password", "title" => "Recover Password v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],

            ]],
            ["path" => "", "title" => "Login & Register v2", "icon" => "far fa-circle", "slug" => "", "children" => [
                ["path" => "/adminlte/examples/login-v2", "title" => "Login v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/register-v2", "title" => "Register v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/forgot-password-v2", "title" => "Forgot Password v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "/adminlte/examples/recover-password-v2", "title" => "Recover Password v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],

            ]],
            ["path" => "/adminlte/examples/lockscreen", "title" => "Lockscreen", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/legacy-user-menu", "title" => "Legacy User Menu", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/language-menu", "title" => "Language Menu", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/404", "title" => "Error 404", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/500", "title" => "Error 500", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/pace", "title" => "Pace", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/blank", "title" => "Blank Page", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/examples/starter", "title" => "Starter Page", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "/adminlte/search", "title" => "Search", "icon" => "fas fa-search", "slug" => "", "children" => [
            ["path" => "/adminlte/search/simple", "title" => "Simple Search", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "/adminlte/search/enhanced", "title" => "Enhanced", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["title" => "MISCELLANEOUS", "type" => "header"],
        ["path" => "", "title" => "Tabbed IFrame Plugin", "icon" => "fas fa-ellipsis-h", "slug" => "", "children" => []],
        ["path" => "", "title" => "Documentation", "icon" => "fas fa-file", "slug" => "", "children" => []],
        ["title" => "MULTI LEVEL EXAMPLE", "type" => "header"],
        ["path" => "", "title" => "Level 1", "icon" => "fas fa-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Level 1", "icon" => "fas fa-circle", "slug" => "", "children" => [
            ["path" => "", "title" => "Level 2", "icon" => "far fa-circle", "slug" => "", "children" => []],
            ["path" => "", "title" => "Level 2", "icon" => "far fa-circle", "slug" => "", "children" => [
                ["path" => "", "title" => "Level 3", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "", "title" => "Level 3", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
                ["path" => "", "title" => "Level 3", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],

            ]],
            ["path" => "", "title" => "Level 2", "icon" => "far fa-circle", "slug" => "", "children" => []],

        ]],
        ["path" => "", "title" => "Level 1", "icon" => "fas fa-circle", "slug" => "", "children" => []],
        ["title" => "LABELS", "type" => "header"],
        ["path" => "", "title" => "Important", "icon" => "far fa-circle text-danger", "slug" => "", "children" => []],
        ["path" => "", "title" => "Warning", "icon" => "far fa-circle text-warning", "slug" => "", "children" => []],
        ["path" => "", "title" => "Informational", "icon" => "far fa-circle text-info", "slug" => "", "children" => []],
    ]
];
