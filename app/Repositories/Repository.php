<?php
namespace APP\Repositories;

class Repository
{
    protected $model;

     /**
     * Browse all $model
     *
     * @return $model
     */
    function getAll($orders)
    {
        return $this->model->orderBy($orders)->get();
    }

    /**
     * Browse all $model with deleted item
     * 
     * @return $model
     */
    function getAllWithDeleted($orders)
    {
        return $this->model->withTrashed()->orderBy($orders)->get();
    } 

    /**
     * Browse all $model with filtered item
     * 
     * @return $model
     */
    public function filterAll($where,$orders)
    {
        return $this->model->where($where)->orderBy($orders)->get();
    }

    /**
     * Find $model based on id
     * 
     * @return $model
     */
    function getById($id)
    {
        return $this->model->find($id);
    }
    
    /**
     * Browse $model limit to $limit
     * 
     * @return $model
     */
    function getPaginated($limit,$orders)
    {
        return $this->model->orderBy($orders)->paginate($limit);
    }

    /**
     * Filter $model and limit to $limit
     * 
     * @return $model
     */
    function filterPaginated($limit,$where,$orders)
    {
        return $this->model->where($where)->orderBy($orders)->paginate($limit);   
    }

    /**
     * Get only deleted $model
     * 
     * @return $model
     */
    function getDeleted($orders)
    {
        return $this->model->onlyTrashed()->orderBy($orders)->get();
    }

    /**
     * Filter deleted $model 
     * 
     * @return $model
     */
    function filterDeleted($where,$orders)
    {
        return $this->model->where($where)->orderBy($orders)->onlyTrashed()->get();   
    }

    /**
     * Filter Paginate Deleted $model 
     * 
     * @return $model
     */
    function filterPaginateDeleted($limit,$where,$orders)
    {
        return $this->model->where($where)->orderBy($orders)->onlyTrashed()->paginate($limit);   
    }

    /**
     * Save $model
     *
     * @return $model
     */
    function create($data)
    {
        return $this->model->create($data);
    }
    
    /**
     * Update $model based on id
     *
     * @return $model
     */
    function update($data,$id)
    {
        return $this->model->find($id)->update($data);
    }
    
    /**
     * Update or Create $model 
     * 
     * @return $model
     */
    function updateOrCreate($where,$data)
    {
        return $this->model->updateOrCreate($where,$data);
    }

    /**
     * Remove $model based on id
     *
     * @return bool
     */
    function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * Soft delete
     * 
     * @return bool
     */
    function softDelete($id)
    {
        # code...
    }
}