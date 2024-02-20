<?php

return [
  "title" => "AdminLTE3",
  "logo" => "/modules/adminlte/public/img/AdminLTELogo.png",
  "menu" => [
    ["path" => "", "title" => "Dashboard", "icon" => "fas fa-tachometer-alt", "slug" => "", "children" => [
      ["path" => "", "title" => "Dashboard v1", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/index2", "title" => "Dashboard v2", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/index3", "title" => "Dashboard v3", "icon" => "far fa-circle", "slug" => "", "children" => []],
    ]],
    ["path" => "/widgets", "title" => "Widgets", "icon" => "fas fa-th", "slug" => "", "badge" => ["type" => "danger", "value" => "NEW"], "children" => []],
    ["path" => "/layout", "title" => "Layout Options", "icon" => "fas fa-copy", "slug" => "", "badge" => ["value" => "6"], "children" => [
      ["path" => "/top-nav", "title" => "Top Navigation", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/top-nav-sidebar", "title" => "Top Navigation + Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/boxed", "title" => "Boxed", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/fixed-sidebar", "title" => "Fixed Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/fixed-sidebar-custom", "title" => "Fixed Sidebar <small>+ Custom Area</small>", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/fixed-topnav", "title" => "Fixed Navbar", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/fixed-footer", "title" => "Fixed Footer", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/collapsed-sidebar", "title" => "Collapsed Sidebar", "icon" => "far fa-circle", "slug" => "", "children" => []],
    ]],
    ["path" => "/charts", "title" => "Charts", "icon" => "fas fa-chart-pie", "slug" => "", "children" => [
      ["path" => "/chartjs", "title" => "ChartJS", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/flot", "title" => "Flot", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/inline", "title" => "Inline", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/uplot", "title" => "uPlot", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["path" => "/ui", "title" => "UI Elements", "icon" => "fas fa-tree", "slug" => "", "children" => [
      ["path" => "/general", "title" => "General", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/icons", "title" => "Icons", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/buttons", "title" => "Buttons", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/sliders", "title" => "Sliders", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/modals", "title" => "Modals & Alerts", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/navbar", "title" => "Navbar & Tabs", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/timeline", "title" => "Timeline", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/ribbons", "title" => "Ribbons", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["path" => "/forms", "title" => "Forms", "icon" => "fas fa-edit", "slug" => "", "children" => [
      ["path" => "/general", "title" => "General Elements", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/advanced", "title" => "Advanced Elements", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/editors", "title" => "Editors", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/validation", "title" => "Validation", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["path" => "/tables", "title" => "Tables", "icon" => "fas fa-table", "slug" => "", "children" => [
      ["path" => "/simple", "title" => "Simple Tables", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/data", "title" => "DataTables", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/jsgrid", "title" => "jsGrid", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["title" => "EXAMPLES", "type" => "header"],
    ["path" => "/calendar", "title" => "Calendar", "icon" => "far fa-calendar-alt", "slug" => "", "badge" => ["value" => "2"], "children" => []],
    ["path" => "/gallery", "title" => "Gallery", "icon" => "far fa-image", "slug" => "", "children" => []],
    ["path" => "/kanban", "title" => "Kanban Board", "icon" => "far fa-envelope", "slug" => "", "children" => []],
    ["path" => "/mailbox", "title" => "Mailbox", "icon" => "far fa-envelope", "slug" => "", "children" => [
      ["path" => "/mainbox", "title" => "Inbox", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/compose", "title" => "Compose", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/read-mail", "title" => "Read", "icon" => "far fa-circle", "slug" => "", "children" => []],
    ]],
    ["path" => "/examples", "title" => "Pages", "icon" => "fas fa-book", "slug" => "", "children" => [
      ["path" => "/invoice", "title" => "Invoice", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/profile", "title" => "Profile", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/e-commerce", "title" => "E-commerce", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/projects", "title" => "Projects", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/project-add", "title" => "Project Add", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/project-detail", "title" => "Project Edit", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Project Detail", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Contacts", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "FAQ", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Contact us", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["path" => "/examples", "title" => "Extras", "icon" => "far fa-plus-square", "slug" => "", "children" => [
      ["path" => "", "title" => "Login & Register v1", "icon" => "far fa-circle", "slug" => "", "children" => [
        ["path" => "/login", "title" => "Login v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "/register", "title" => "Register v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Forgot Password v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Recover Password v1", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],

      ]],
      ["path" => "", "title" => "Login & Register v2", "icon" => "far fa-circle", "slug" => "", "children" => [
        ["path" => "/login-v2", "title" => "Login v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Register v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Forgot Password v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],
        ["path" => "", "title" => "Recover Password v2", "icon" => "far fa-dot-circle", "slug" => "", "children" => []],

      ]],
      ["path" => "", "title" => "Lockscreen", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Legacy User Menu", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Language Menu", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Error 404", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Error 500", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Pace", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Blank Page", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "", "title" => "Starter Page", "icon" => "far fa-circle", "slug" => "", "children" => []],

    ]],
    ["path" => "/search", "title" => "Search", "icon" => "fas fa-search", "slug" => "", "children" => [
      ["path" => "/simple", "title" => "Simple Search", "icon" => "far fa-circle", "slug" => "", "children" => []],
      ["path" => "/enhanced", "title" => "Enhanced", "icon" => "far fa-circle", "slug" => "", "children" => []],

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