<?php
/************************************************************************
 Keosu is an open source CMS for mobile app
Copyright (C) 2014  Vincent Le Borgne, Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
************************************************************************/

namespace Keosu\CoreBundle;

/**
 * Contains all events thrown in the Keosu framework
 */
final class KeosuEvents
{

	/**
	 * The GADGET_ADD[Name of the gadget] event occurs when a new gadget will be added
	 *
	 * This event allows to add action when the gadget is about to be added
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetActionEvent instance
	 */
	const GADGET_ADD = 'keosu.gadget.add.';

	/**
	 * The GADGET_EDIT[Name of the gadget] event occurs when a gadget is about to be edited
	 *
	 * This event allows to add action when the gadget is about to be edited
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetActionEvent instance
	 */
	const GADGET_EDIT = 'keosu.gadget.edit.';

	/**
	 * The GADGET_DELETE[Name of the gadget] event occurs when a gadget will be deleted
	 *
	 * This event allows to add action when the gadget is about to be deleted
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetActionEvent instance
	 */
	const GADGET_DELETE = 'keosu.gadget.delete.';

	/**
	 * The GADGET_CONF_BUILD[Name of the gadget] event occurs when the form config is created
	 *
	 * This event allows to modify the config field
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetFormBuilderEvent instance
	 */
	const GADGET_CONF_FORM_BUILD = 'keosu.gadget.conf.form.build.';

	/**
	 * The GADGET_CONF_SAV[Name of the gadget] event occurs when the gadget is about to be persisted
	 *
	 * This event allows to modify the gadget before it become saved
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetSaveConfigEvent instance
	 */
	const GADGET_CONF_SAV = 'keosu.gadget.conf.sav.';

	/**
	 * The GADGET_CONF_VIEW[Name of the gadget] event occurs when the form of the gadget is about to be rendered
	 *
	 * This event allows to modify the form template
	 * The event listener method receives a Keosu\CoreBundle\Event\FormEvent instance
	 */
	const GADGET_CONF_VIEW = 'keosu.gadget.conf.view.';

	/**
	 * The GADGET_PANEL[Name of the gadget] event occurs when the panel for the gadget is rendered in page simulator
	 *
	 * This event allows to modify the panel of the gadget
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetPanelEvent instance
	 */
	const GADGET_PANEL = 'keosu.gadget.panel.';
	
	/**
	 * The GADGET_PAGE_PANEL[Name of the gadget] event occurs when the panel for the page is rendered in page list
	 *
	 * TODO BUGGY
	 *
	 * This event allows to modify the panel of the page where the gadget is included
	 * The event listener method receives a Keosu\CoreBundle\Event\PagePanelEvent instance
	 */
	const GADGET_PAGE_PANEL = 'keosu.gadget.page.panel.';

	/**
	 * The GADGET_PAGE_EDIT[Name of the gadget] event occurs when the page is about to be edited
	 *
	 * This event allows to modify the edit action of a page with a specific gadget
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetPanelEvent instance
	 */
	const GADGET_PAGE_EDIT = 'keosu.gadget.page.edit.';

	/**
	 * The GADGET_PAGE_DELETE[Name of the gadget] event occurs when the page is about to be deleted
	 *
	 * This event allows to modify the delete action of a page with a specific gadget
	 * The event listener method receives a Keosu\CoreBundle\Event\GadgetPanelEvent instance
	 */
	const GADGET_PAGE_DELETE = 'keosu.gadget.page.delete.';

	/**
	 * The GADGET_EXPORT[Name of the gadget] event occurs when the package is about to be exported
	 *
	 * This event allows to modify the default action when a package is about to be exported
	 * The event listener method receives a Keosu\CoreBundle\Event\ExportPackageEvent instance
	 */
	const PACKAGE_EXPORT = 'keosu.package.export.';

	/**
	TODO
	 * The GADGET_GLOBAL_CONFIG_BUILD_FORM[Name of the gadget] event occurs when the form of the app is about to be builded
	 *
	 * This event allows to add specific config in global config
	 * The event listener method receives a Keosu\CoreBundle\Event\PagePanelEvent instance
	 */
	const GADGET_GLOBAL_CONFIG_BUILD_FORM = 'keosu.gadget.global.config.build.form.';

	/**
	 * The GADGET_PAGE_PANEL[Name of the gadget] event occurs when the panel when the config for app is about to be saved
	 *
	TODO
	 * This event allows to add custom information for the gadget in global param
	 * The event listener method receives a Keosu\CoreBundle\Event\PagePanelEvent instance
	 */
	const GADGET_GLOBAL_CONFIG_SAV_FORM = 'keosu.gadget.global.config.sav.form.';
}
