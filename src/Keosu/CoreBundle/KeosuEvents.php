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
}
