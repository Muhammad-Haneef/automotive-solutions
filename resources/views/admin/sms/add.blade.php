<x-layouts.admin>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form class="row g-3 needs-validation" novalidate="">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label" for="validationCategoryName">Category Name<span class="txt-danger">*</span></label>
                            <input class="form-control" id="validationCategoryName" type="text" placeholder="Enter your category name" required="">
                            <div class="invalid-feedback">
                                Please enter a category name.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="validationSlug">Slug<span class="txt-danger">*</span></label>
                            <input class="form-control" id="validationSlug" type="text" placeholder="Enter slug" required="">
                            <div class="invalid-feedback">
                                Please enter a slug name.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Parent Category<span class="txt-danger">*</span></label>
                            <select class="form-select" aria-label="Select parent category">
                                <option selected="">T-shirts</option>
                                <option value="1">Purse</option>
                                <option value="2">Cameras</option>
                                <option value="3">Shoes </option>
                                <option value="4">Handbags</option>
                                <option value="5">Sleepers</option>
                                <option value="6">Watches</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a parent category.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Category Type<span class="txt-danger">*</span></label>
                            <select class="form-select" aria-label="Select category type">
                                <option selected="">Electronic</option>
                                <option value="1">Accessories</option>
                                <option value="2">Footwear</option>
                                <option value="3">Clothing</option>
                                <option value="4">Furniture</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a category type.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Category Status<span class="txt-danger">*</span></label>
                            <select class="form-select" aria-label="Select category status">
                                <option selected="">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a category status.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Category Description</label>
                            <div class="toolbar-box">
                                <div id="toolbar9">
                                    <button class="ql-bold">Bold </button>
                                    <button class="ql-italic">Italic </button>
                                    <button class="ql-underline">underline</button>
                                    <button class="ql-strike">Strike </button>
                                    <button class="ql-list" value="ordered">List </button>
                                    <button class="ql-list" value="bullet"> </button>
                                    <button class="ql-indent" value="-1"> </button>
                                    <button class="ql-indent" value="+1"></button>
                                    <button class="ql-link"></button>
                                </div>
                                <div id="editor9"></div>
                            </div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-12">
                            <div class="main-divider">
                                <div class="divider-body">
                                    <h6>SEO Tags</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="validationMetaTitle">Meta Title<span class="txt-danger">*</span></label>
                            <input class="form-control" id="validationMetaTitle" type="text" placeholder="Enter meta title" required="">
                            <div class="invalid-feedback">
                                Please enter a meta title.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="validationKeyword">Meta Keywords<span class="txt-danger">*</span><span class="c-o-light">&nbsp;(In comma separated)</span></label>
                            <input class="form-control" id="validationKeyword" type="text" placeholder="Enter meta keywords" required="">
                            <div class="invalid-feedback">
                                Please enter a meta keywords(In comma separated).</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <div class="toolbar-box">
                                <div id="toolbar10">
                                    <button class="ql-bold">Bold </button>
                                    <button class="ql-italic">Italic </button>
                                    <button class="ql-underline">underline</button>
                                    <button class="ql-strike">Strike </button>
                                    <button class="ql-list" value="ordered">List </button>
                                    <button class="ql-list" value="bullet"> </button>
                                    <button class="ql-indent" value="-1"> </button>
                                    <button class="ql-indent" value="+1"></button>
                                    <button class="ql-link"></button>
                                </div>
                                <div id="editor10"></div>
                            </div>
                            <div class="invalid-feedback">
                                Please enter a meta description</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Create +</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>