# metaPhorest.org Website

- Public Development Repository for the metaPhorest Community Website.
- [ProcessWire](https://processwire.com) Theme for [metaPhorest.org](https://metaphorest.org).

## Requirements

- Free and Open Source Software
- Bi-lingual (JP/EN)
- metaPhorest Member Accounts

## Content

- Pages (About, etc)
- Member Pages (General Info, Works)
- News
- metaPhorest Seminars
- Works

# Design

Please put Graphic Designs, Ideas & Suggestion into the `\_design` folder.

# HTML-izing

Please put Production-ready HTML into the `\_html` folder.

### TailwindCSS

[TailwindCSS](https://tailwindcss.com) is a utility-first CSS framework, the advantage of mix-ins and smaller file size, come with a slightly more [complex dev-setup](https://tailwindcss.com/docs/installation), that might deter first-time users.

See a Tailwind Exampels in the `\_html` folder.

# Development

Wordpress used to be the universal tool of choice, but in recent releases Wordpress went more into an Website-Builder direction, rather than strengthening the CMS aspects of it. (Looking at you, Block Editor). It came to a point where it does not longer make sense to bend and modify Wordpress to function as a CMS/CMF.

Also, recent the move of both ACF and WPML to go from perpetual license to a yearly subscription fee makes Wordpress even less attractive.

After evaluation other framesworks and alternatives like SSGs, we decided to build the new metaPhorst  Website using [ProcessWire](https://www.processwire.com). (But if there are other solutions, please share them!)


# Use Cases

## 1. metaPhorest Seminars

- Create an `metaPhorest Event Page` with all the necessary event info.
- Based on that data, create an `Event Overview Page`, showing all future events, ordered by date, includung resized image previews, title, and event abstract.
- Once the event is finished - i.e. the `event date` is older than the current date, the event page moves to the `Event Archive Page`.
- User can write `Event Reports`, which can be linked to the `Event Page`. Links to the `Event Reports` appear on the `Event Page.`

## 2. metaPhorest Members Sites

- Each metaPhorest Members should have own page, where basic info can be edited updated

## 3. Exhibition Page

- Landing page for metaPhorest exhibitions. 



### Requirements

What we need/want from a CMS/CMF:

- [x] [Free and Open-Source Software](https://github.com/processwire/processwire/blob/master/LICENSE.TXT)
- [x] Needs to run on Apache on a Shared Server (LAMP)
- [x] User Management (Create new Users, change/update User Profile)
- [x] User Passwort Reset
- [x] Role-based Access Control (Admin, Editor, etc.)
- [x] Bi-lingual JP/EN
- [x] MarkDown
- [x] Custom Post/Page Types (ie. Events, Inventory, News, etc)
- [x] Support for Custom Fields [Support](_structure/ProcessWire.md)
- [x] Server-side Image Resizing
- [x] HTTPS


### Nice to have
- [ ] Announce Mailing List Management (subscribe/unsubscribe)

### ProcessWire Installation

- ProcessWire [Installation](INSTALLATION.md) Notes.
- Screenshots with [ProcessWire Examples](_structure/ProcessWire.md).

## TODO

- [x] Add SSL Certificate via [Let's Encrypt](https://letsencrypt.org), so we can have https://metaphorest.org
- [ ] Make Developement Site at [https://metaphorest.org](https://metaphorest.org)
- [ ] Install ProcessWire at Developement Site
- [ ] Create Template/Fields Export/Import System
- [ ] Make Basic Pages
- [ ] Make Site Bi-lingual, Japanese/English
- [ ] Make Accounts for metaPhorest Members


Please share your ideas, whishes and content at the metaPhorest Discord.




