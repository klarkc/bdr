<?php
App::uses('IndexTask', 'Searchable.Console/Command/Task');

class MyIndexTask extends IndexTask
{

       /**
  	 * indexModel action
  	 *
  	 * @param Model $model the model to be indexed
  	 * @return void
  	 */
    public function indexModel($model)
    {
           // Disable RemoveExtraBehavior
        if ($this->modelCache[$model]->Behaviors->enabled('RemoveExtra')) {
               $this->out(__('Disabling RemoveExtraBehavior'));
               $this->modelCache[$model]->Behaviors->disable('RemoveExtra');
        }
           // Keep going
           parent::indexModel($model);
    }
}
