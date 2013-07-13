 * @package    PatchTester
 *
 * @copyright  Copyright (C) 2011 - 2012 Ian MacLennan, Copyright (C) 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later
 * @package  PatchTester
 * @since    1.0
	 * @var    JHttp
	 * @since  2.0
	 * @var    PTGithub
	 * @since  2.0
	 * @var    object
	 * @since  2.0
	 * @since   2.0
	 * @return  void
	 * @note    Calling getState() in this method will result in recursion.
	 * @since   1.0
	/**
	 * Method to parse a patch and extract the affected files
	 *
	 * @param   string  $patch  Patch file to parse
	 *
	 * @return  array  Array of files within a patch
	 *
	 * @since   1.0
	 */

					$file         = new stdClass;

						$state   = 0;


	/**
	 * Patches the code with the supplied pull request
	 *
	 * @param   integer  $id  ID of the pull request to apply
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 * @throws  Exception
	 */
					$url = 'https://raw.github.com/' . $pull->head->user->login . '/' . $pull->head->repo->name . '/' . $pull->head->ref . '/' . $file->new;
						throw new Exception(
							sprintf('Can not copy file %s to %s', JPATH_ROOT . '/' . $file->old, JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt')
						);


			$table                  = JTable::getInstance('tests', 'PatchTesterTable');
			$table->pull_id         = $pull->number;
			$table->data            = json_encode($files);
			$table->patched_by      = JFactory::getUser()->id;
			$table->applied         = 1;
	/**
	 * Reverts the specified pull request
	 *
	 * @param   integer  $id  ID of the pull request to Reverts
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 * @throws  Exception
	 */
			throw new Exception(sprintf(JText::_('%s - Error retrieving table data (%s)'), __METHOD__, htmlentities($table->data)));
					if (!JFile::copy(JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt', JPATH_ROOT . '/' . $file->old))
						throw new Exception(
							sprintf(
								JText::_('Can not copy file %s to %s'),
								JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt',
								JPATH_ROOT . '/' . $file->old
							)
						);
						throw new Exception(sprintf(JText::_('Can not delete the file: %s'), JPATH_COMPONENT . '/backups/' . md5($file->old) . '.txt'));

						throw new Exception(sprintf(JText::_('Can not delete the file: %s'), JPATH_ROOT . '/' . $file->new));
