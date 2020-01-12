<%@ include file="common/header.jspf" %>
<%@ include file="common/navigation.jspf" %>
<script src="webjars/jquery/1.9.1/jquery.min.js"></script>

<div class="container">
	<form:form method="post" commandName="update">
		<form:hidden path="id" />
		<fieldset class="form-group">
			<form:label path="id">Gateway ID</form:label>
			<form:input path="id" type="text" class="form-control"
						required="required" />
			<form:errors path="id" cssClass="text-warning" />
		</fieldset>
		
		<fieldset class="form-group">
			<form:label path="gatewayName">GatewayName</form:label>
			<form:input path="gatewayName" type="text" class="form-control"
						required="required" />
			<form:errors path="gatewayName" cssClass="text-warning" />
		</fieldset>
		
		<fieldset class="form-group">
			<form:label path="ipAddress">Gateway IP</form:label>
			<form:input path="ipAddress" type="text" class="form-control"
						required="required" />
			<form:errors path="ipAddress" cssClass="text-warning" />
		</fieldset>
		
		<fieldset class="form-group">
			<form:label path="devices">Devices</form:label>
			<form:input path="devices" type="text" class="form-control"
						required="required" />
			<form:errors path="devices" cssClass="text-warning" />
		</fieldset>

		<div>
			<a type="button" class="btn btn-success" href="/add-device">Add Device</a>
			<a type="button" class="btn btn-warning" href="/delete-device?id=${device.id}">Delete Device</a>
		</div>
	</form:form>
</div>
<%@ include file="common/footer.jspf" %>