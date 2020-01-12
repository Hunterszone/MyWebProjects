<%@ include file="common/header.jspf" %>
<%@ include file="common/navigation.jspf" %>
<div class="container">
	<form:form method="post" commandName="device">
		<form:hidden path="id" />
		<fieldset class="form-group">
			<form:label path="id">ID (auto-gen on Submit)</form:label>
			<form:input path="id" type="text" class="form-control"
						required="required" />
			<form:errors path="id" cssClass="text-warning" />
		</fieldset>
		
		<fieldset class="form-group">
			<form:label path="vendor">Vendor</form:label>
			<form:input path="vendor" type="text" class="form-control"
						required="required" />
			<form:errors path="vendor" cssClass="text-warning" />
		</fieldset>
		
		<fieldset class="form-group">
			<form:label path="creationDate">Creation Date</form:label>
			<form:input path="creationDate" type="text" class="form-control"
						required="required" />
			<form:errors path="creationDate" cssClass="text-warning" />
		</fieldset>

		<fieldset class="form-group">
			<form:label path="online">Online</form:label>
			<form:input path="online" type="text" class="form-control"
						required="required" />
			<form:errors path="online" cssClass="text-warning" />
		</fieldset>

		<button type="submit" class="btn btn-success">Submit</button>
	</form:form>
</div>
<%@ include file="common/footer.jspf" %>