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
namespace Keosu\DataModel\FormModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Keosu\DataModel\FormModelBundle\Entity\Form;

/**
 * FormField
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class FormField {

	const SINGLE_CHOICE = 'singleChoice';
	const MULTIPLE_CHOICE = 'multipleChoice';
	const LONG_TEXT = 'longText';
	const	SHORT_TEXT = 'shortText';
	const	PHOTO = 'photo';

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $type
	 *
	 * @ORM\Column(name="type", type="string", length=15, nullable=false)
	 */
	private $type;

	/**
	 * @var string $text
	 *
	 * @ORM\Column(name="text", type="string", length=255, nullable=false)
	 */
	private $text;

	/**
	 * @var string $form
	 *
	 * @ORM\ManyToOne(targetEntity="Form", inversedBy="fields")
	 * @ORM\JoinColumn(name="formId", referencedColumnName="id", nullable=false)
	 */
	private $form;

	/**
	 * @var string $required
	 *
	 * @ORM\Column(name="required", type="boolean")
	 */
	private $required;

	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Get translated type
	 *
	 * @param string $locale
	 * @return string
	 */
	public function getTranslatedType($locale = 'en') {

		if ($this->type === FormField::SINGLE_CHOICE)
			return ($locale === 'fr' ? 'Choix simple' : 'Single choice');
		else if ($this->type === FormField::MULTIPLE_CHOICE)
			return ($locale === 'fr' ? 'Choix multiple' : 'Multiple choice');
		else if ($this->type === FormField::LONG_TEXT)
			return ($locale === 'fr' ? 'Texte long' : 'Long text');
		else if ($this->type === FormField::SHORT_TEXT)
			return ($locale === 'fr' ? 'Texte court' : 'Short text');
		else return 'Photo';

	}

	/**
	 * Set type
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get text
	 *
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Set text
	 *
	 * @param string $text
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
	 * Get quizz
	 *
	 * @return Form
	 */
	public function getForm() {
		return $this->quizz;
	}

	/**
	 * Set form
	 *
	 * @param Form $form
	 */
	public function setForm($form) {
		$this->form = $form;
	}

	/**
	 * Get required
	 *
	 * @return string
	 */
	public function getRequired() {
		return $this->required;
	}

	/**
	 * Set required
	 *
	 * @param string $text
	 */
	public function setRequired($required) {
		$this->required = $required;
	}

}
