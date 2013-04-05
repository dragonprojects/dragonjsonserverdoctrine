<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

namespace DragonJsonServerDoctrine\Entity;

/**
 * Trait für das Attributes mit dem Zeitpunkt der letzten Änderung
 */
trait ModifiedTrait
{
	/**
	 * @Doctrine\ORM\Mapping\Column(type="datetime")
	 **/
	protected $modified;
	
	/**
	 * Gibt den Zeitpunkt der letzten Änderung zurück
	 * @return \DateTime
	 */
	public function getModified()
	{
		return $this->modified;
	}
}